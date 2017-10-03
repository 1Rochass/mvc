<?php
interface Twig_LoaderInterface
{
    /**
     * Returns the source context for a given template logical name.
     *
     * @param string $name The template logical name
     *
     * @return Twig_Source
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function getSourceContext($name);

    /**
     * Gets the cache key to use for the cache for a given template name.
     *
     * @param string $name The name of the template to load
     *
     * @return string The cache key
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function getCacheKey($name);

    /**
     * Returns true if the template is still fresh.
     *
     * @param string    $name The template name
     * @param timestamp $time The last modification time of the cached template
     *
     * @return bool    true if the template is fresh, false otherwise
     *
     * @throws Twig_Error_Loader When $name is not found
     */
    public function isFresh($name, $time);

    /**
     * Check if we have the source code of a template, given its name.
     *
     * @param string $name The name of the template to check if we can load
     *
     * @return bool    If the template source code is handled by this loader or not
     */
    public function exists($name);
}
class View implements Twig_LoaderInterface 
{
	public $loader;
	public $twig;

	public function __construct()
	{
		$this->loader = new Twig_Loader_Filesystem('../src/admin/views/');
		$this->twig = new Twig_Environment($this->loader);
	}

	public function getSourceContext($name)
	{

	}
    public function getCacheKey($name)
    {

    }
    public function isFresh($name, $time)
    {

    }
    public function exists($name)
	{

	}	
	// static function generate($bundleName, $view, $data=null)
	// {
	// 	require "../src/" . $bundleName . "/views/" . $view;
	// }
}