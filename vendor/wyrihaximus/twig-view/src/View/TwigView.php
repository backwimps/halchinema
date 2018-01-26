<?php

/**
 * This file is part of TwigView.
 *
 ** (c) 2014 Cees-Jan Kiewiet
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace WyriHaximus\TwigView\View;

use Cake\Core\Configure;
use Cake\View\View;
use Exception;
use WyriHaximus\TwigView\Event\ConstructEvent;
use WyriHaximus\TwigView\Event\EnvironmentConfigEvent;
use WyriHaximus\TwigView\Event\LoaderEvent;
use WyriHaximus\TwigView\Lib\Twig\Loader;

/**
 * Class TwigView
 * @package WyriHaximus\TwigView\View
 */
// @codingStandardsIgnoreStart
class TwigView extends View
// @codingStandardsIgnoreEnd
{
    const EXT = '.twig';

    const ENV_CONFIG = 'WyriHaximus.TwigView.environment';

    /**
     * Extension to use.
     *
     * @var string
     */
    // @codingStandardsIgnoreStart
    protected $_ext = self::EXT;
    // @codingStandardsIgnoreEnd

    /**
     * @var array
     */
    protected $extensions = [
        self::EXT,
        '.tpl',
        '.ctp',
    ];

    /**
     * Twig instance.
     *
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * Initialize view.
     *
     * @return void
     */
    public function initialize()
    {
        $this->twig = new \Twig_Environment($this->getLoader(), $this->resolveConfig());

        $this->eventManager()->dispatch(ConstructEvent::create($this, $this->twig));

        $this->_ext = self::EXT;

        parent::initialize();
    }

    /**
     * @return array
     */
    protected function resolveConfig()
    {
        $config = [
            'cache' => CACHE . 'twigView' . DS,
            'charset' => strtolower(Configure::read('App.encoding')),
            'auto_reload' => Configure::read('debug'),
            'debug' => Configure::read('debug'),
        ];

        $config = array_replace($config, $this->readConfig());

        $configEvent = EnvironmentConfigEvent::create($config);
        $this->eventManager()->dispatch($configEvent);
        return $configEvent->getConfig();
    }

    /**
     * @return array
     */
    protected function readConfig()
    {
        if (!Configure::check(static::ENV_CONFIG)) {
            return [];
        }

        $config = Configure::read(static::ENV_CONFIG);
        if (!is_array($config)) {
            return [];
        }

        return $config;
    }

    /**
     * @param string $extension
     */
    public function unshiftExtension($extension)
    {
        array_unshift($this->extensions, $extension);
    }

    /**
     * Create the template loader.
     *
     * @return \Twig_LoaderInterface
     */
    protected function getLoader()
    {
        $event = LoaderEvent::create(new Loader());
        $this->eventManager()->dispatch($event);
        return $event->getResultLoader();
    }

    /**
     * Get helper list.
     *
     * @return \Cake\View\Helper[]
     */
    protected function generateHelperList()
    {
        $registry = $this->helpers();
        $helperList = [];

        foreach ($registry->loaded() as $alias) {
            $helperList[$alias] = $registry->get($alias);
        }

        return $helperList;
    }
    /**
     * Render the template.
     *
     * @param string $viewFile Template file.
     * @param array  $data     Data that can be used by the template.
     *
     * @throws \Exception
     * @return string
     */
    // @codingStandardsIgnoreStart
    protected function _render($viewFile, $data = array())
    {
        // @codingStandardsIgnoreEnd
        if (empty($data)) {
            $data = $this->viewVars;
        }

        if (substr($viewFile, -3) === 'ctp') {
            $out = parent::_render($viewFile, $data);
            // @codingStandardsIgnoreStart
        } else {
            // @codingStandardsIgnoreEnd
            $data = array_merge(
                $data,
                $this->generateHelperList(),
                [
                    '_view' => $this,
                ]
            );

            // @codingStandardsIgnoreStart
            try {
                $out = $this->getTwig()->loadTemplate($viewFile)->render($data);
            } catch (Exception $e) {
                $previous = $e->getPrevious();

                if ($previous !== null && $previous instanceof Exception) {
                    throw $previous;
                } else {
                    throw $e;
                }
            }
            // @codingStandardsIgnoreEnd
        }

        return $out;
    }

    /**
     * @param string|null $name
     * @return string
     * @throws \Exception
     */
    // @codingStandardsIgnoreStart
    protected function _getViewFileName($name = null)
    {
        // @codingStandardsIgnoreEnd
        $rethrow = new \Exception('You\'re not supposed to get here');
        foreach ($this->extensions as $extension) {
            $this->_ext = $extension;
            try {
                return parent::_getViewFileName($name);
            } catch (\Exception $exception) {
                $rethrow = $exception;
            }
        }

        throw $rethrow;
    }

    /**
     * @param string|null $name
     * @return string
     * @throws \Exception
     */
    // @codingStandardsIgnoreStart
    protected function _getLayoutFileName($name = null)
    {
        // @codingStandardsIgnoreEnd
        $rethrow = new \Exception('You\'re not supposed to get here');
        foreach ($this->extensions as $extension) {
            $this->_ext = $extension;
            try {
                return parent::_getLayoutFileName($name);
            } catch (\Exception $exception) {
                $rethrow = $exception;
            }
        }

        throw $rethrow;
    }

    /**
     * @param string $name
     * @param bool $pluginCheck
     * @return string
     * @throws \Exception
     */
    // @codingStandardsIgnoreStart
    protected function _getElementFileName($name, $pluginCheck = true)
    {
        // @codingStandardsIgnoreEnd
        foreach ($this->extensions as $extension) {
            $this->_ext = $extension;
            $result = parent::_getElementFileName($name, $pluginCheck);
            if ($result !== false) {
                return $result;
            }
        }

        return false;
    }

    /**
     * Get twig environment instance.
     *
     * @return \Twig_Environment
     */
    public function getTwig()
    {
        return $this->twig;
    }

    /**
     * Return empty string when View instance is cast to string.
     *
     * @return string
     */
    public function __toString()
    {
        return '';
    }
}
