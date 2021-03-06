<?php

namespace Octopod\Octophp;

use Octopod\Octophp\Interfaces\Renderable;

/**
 * Class Response — generates and sends full response XML
 *
 * @package Octopod\Octophp
 */
class Response implements Renderable {

    const TEMPLATE_FILE = 'responseTemplate.php';

    protected $views;
    protected $responseParameters;

    protected $sessionId;
    protected $debug;
    protected $orientation;
    protected $cacheImagesCounter;
    protected $cacheMarkupCounter;
    protected $installationId;

    protected $settings;
    protected $variables;
    protected $badgeCounter;

    protected $actions;
    protected $alerts;
    protected $scripts;
    protected $systemEvents;

    protected $resources;
    protected $queries;

    protected $resourcesByteSize;
    protected $responseType;


    public function __construct()
    {
        $this->sessionId = '';
        $this->debug = Facades\Config::get('debug');
        $this->orientation = Facades\Config::get('default.orientation');
        $this->cacheImagesCounter = 0;
        $this->cacheMarkupCounter = 0;
        $this->installationId = '';
    }

    public function setParameter($key, $value)
    {
        $this->responseParameters[$key] = $value;
    }

    public function setSetting($key, $value)
    {
        $this->settings[$key] = $value;
    }

    public function setVariable($key, $value)
    {
        $this->variables[$key] = $value;
    }

    /**
     * @param Renderable $scripts
     * @throws \InvalidArgumentException
     */
    public function setScripts($scripts)
    {
        if ( ! $scripts instanceof Renderable) {
            throw new \InvalidArgumentException("Response scripts should implement Renderable interface.");
        }
        $this->scripts = $scripts;
    }

    /**
     * @param Renderable $template
     * @throws \InvalidArgumentException
     */
    public function setSystemEvents($template){
        if ( ! $template instanceof Renderable) {
            throw new \InvalidArgumentException("SystemEvents should implement Renderable interface.");
        }
        $this->systemEvents = $template;
    }

    /**
     * @param Renderable $view
     * @throws \InvalidArgumentException
     */
    public function addView($view)
    {
        if ( ! $view instanceof Renderable) {
            throw new \InvalidArgumentException("View should implement Renderable interface.");
        }
        $this->views[] = $view;
    }

    public function addResource($filename, $url, $localPath = null, $countByteSize = false)
    {
        $this->resources[] = array(
            'filename' => $filename,
            'url' => $url
        );
        if ($countByteSize)
        {
            $this->resourcesByteSize += filesize($localPath);
        }
    }

    public function addAlert($alert)
    {
        $this->alerts[] = $alert;
    }

    /**
     * @param string $query
     */
    public function addQuery($query)
    {
        $this->queries .= $query;
    }

    public function setType($type)
    {
        $this->responseType = $type;
    }

    public function render() {
        ob_start();

        $filePath = realpath(Facades\App::path('octophp').'/responseTemplate.php');
        if (empty($filePath)) {
            throw new OctophpException("Response template cannot be found at $filePath. Check your installation.");
        }
        include $filePath;

        return ob_get_clean();
    }

    public function send()
    {
        header("octopod_size: ".(strlen($this->render()) + intval($this->resourcesByteSize)));
        $resultXml = $this->render();

        echo $resultXml;

        \Log::info($this->responseType, $resultXml);
    }

    /* TEMPORARY */
    public function get($key, $default = null)
    {
        if (property_exists($this, $key)) {
            return $this->$key;
        } else {
            return $default;
        }
    }

}