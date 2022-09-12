<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\DomainAge;
use App\Lib\WhoisLocup;

class HomepageController extends Controller
{
    public function index()
    {
        $domain = null;
        if (isset($_GET['domain'])) {
            $domain = $_GET['domain'];
        }


        if ($domain) {
            $domainage = new DomainAge();
            $look = new WhoisLocup();

            // print_r($look->whoislookup('binarywebtools.com'));
            $whoisinfo = $look->whoislookup($domain);
            $age = $domainage->age($domain);

            // return $age;


            // return $whoisinfo;

            $rows = explode("\n", $whoisinfo);
            $arr = array();
            foreach ($rows as $row) {
                $posOfFirstColon = strpos($row, ":");
                // if ($posOfFirstColon === FALSE)
                //     $arr['info'] .= $row;
                // else
                    $arr[substr($row, 0, $posOfFirstColon)] = trim(substr($row, $posOfFirstColon + 1));
            }
            // echo "<pre>";
            // print_r($arr);
            // echo "</pre>";

            return view('frontend.domain-page', compact('arr', 'age', 'domain'));
        }else{
            return view('frontend.homepage');
        }
    }

    public function search()
    {
        return 'search';
    }
}
