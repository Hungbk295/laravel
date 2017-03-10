<?php
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class WebScraperController extends BaseController {

	/**
	 * Defining our Dependency Injection Here.
	 * or Instantiate new Classes here.
	 *
	 * @return void
	 */
	private $client;
	public  $url;
	public  $crawler;
	public  $filters;
	public  $content = array();

	public function __construct(Client $client)
	{
		$this->client 	= $client;
	}

	/**
	 * This will be used for Outputing our Data
	 * and Rendering to browser.
	 *
	 * @return void
	 */
	public function getIndex()
	{
		$this->url = 'http://code.tutsplus.com';
	return View::make('scraper');
	}

	/**
	 * Setup our scraper data. Which includes the url that
	 * we want to scrape
	 *
	 * @param (String) $url = default is NULL
	 *		  (String) $method = Method Types its either POST || GET
	 * @return void
	 */
	public function setScrapeUrl($url = NULL, $method = 'GET')
	{

	}

	/**
	 * This will get all the return Result from our Web Scraper
	 *
	 * @return array
	 */
	public function getContents()
	{

	}

	/**
	 * It will handle all the scraping logic, filtering
	 * and getting the data from the defined url in our method setScrapeUrl()
	 *
	 * @return array
	 */
	private function startScraper()
	{

	}

}