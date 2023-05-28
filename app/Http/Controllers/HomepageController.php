<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\DomainAge;
use App\Lib\WhoisLocup;
use DateTime;

class HomepageController extends Controller
{
    public function index()
    {
        $domain = null;
        if (isset($_GET['domain'])) {
            $domain = $_GET['domain'];
        }

        $exatDomain = $this->extractDomainName($domain);

        if ($exatDomain) {
            $domainage = new DomainAge();
            $look = new WhoisLocup();

            // print_r($look->whoislookup('binarywebtools.com'));
            $whoisinfo = $look->whoislookup($exatDomain);
            $age = $domainage->age($exatDomain);


            $rows = explode("\n", $whoisinfo);
            $arr = array();
            foreach ($rows as $row) {
                $posOfFirstColon = strpos($row, ":");
                $arr[substr($row, 0, $posOfFirstColon)] = trim(substr($row, $posOfFirstColon + 1));
            }

            // return $whoisinfo;


            return view('frontend.domain-page', compact('arr', 'age', 'exatDomain'));
        } else {
            return view('frontend.homepage');
        }
    }

    public function test()
    {

        $dateString = '2023-04-29T03:30:51Z';

        // Create a DateTime object from the string
        $date = new DateTime($dateString);

        // Format the date as per your requirements
        // $formattedDate = $date->format('Y-m-d H:i:s');
        $formattedDate = $date->format('d-F Y');

        echo $formattedDate;
    }

    function extractDomainName($url)
    {
        // Remove http:// or https:// from the URL
        $url = preg_replace('#^https?://#', '', $url);

        // Extract the domain name using regular expression
        preg_match('/^(?:[a-z]+\:\/\/)?(?:[a-z]+\.)?([a-z0-9\-]+\.[a-z]+)/i', $url, $matches);

        if (isset($matches[1])) {
            return $matches[1]; // Return the extracted domain name
        } else {
            return false; // Invalid URL or unable to extract domain name
        }
    }



    // public function index()
    // {
    //     $domain = null;
    //     if (isset($_GET['domain'])) {
    //         $domain = $_GET['domain'];
    //     }

    //     $domain = $this->extractDomainName($domain);


    //     if ($domain) {
    //         $domainage = new DomainAge();
    //         $look = new WhoisLocup();

    //         // print_r($look->whoislookup('binarywebtools.com'));
    //         $whoisinfo = $look->whoislookup($domain);
    //         $age = $domainage->age($domain);

    //         // return $age;


    //         // return $whoisinfo;

    //         $rows = explode("\n", $whoisinfo);
    //         $arr = array();
    //         foreach ($rows as $row) {
    //             $posOfFirstColon = strpos($row, ":");
    //             // if ($posOfFirstColon === FALSE)
    //             //     $arr['info'] .= $row;
    //             // else
    //                 $arr[substr($row, 0, $posOfFirstColon)] = trim(substr($row, $posOfFirstColon + 1));
    //         }
    //         // echo "<pre>";
    //         // print_r($arr);
    //         // echo "</pre>";

    //         return view('frontend.domain-page', compact('arr', 'age', 'domain'));
    //     }else{
    //         return view('frontend.homepage');
    //     }
    // }







}
