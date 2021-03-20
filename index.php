<?php

/*
 * Author: Hugo (CodeColors)
 * Description: Index page of desaw


require __DIR__ . "/vendor/autoload.php";

use Goutte\Client;
*/
?>

<html class="text-center" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>desaw</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.6.0/solar/bootstrap.min.css">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-content-center align-self-center m-auto justify-content-xl-center align-items-xl-center"
      style="padding: 5% 0% 0% 0%;">
<div class="row d-block justify-content-xl-center align-items-xl-center" style="width: 25%; visibility: hidden; ">
    <div class="col">
        <div role="alert" class="alert alert-light"><span class="text-center d-xl-flex justify-content-xl-center" style="text-align: center;"><i class="fa fa-spinner d-xl-flex justify-content-xl-center align-items-xl-center fa-spin" style="margin: 0px 5px 0px 0px ;"></i><strong>Searching</strong><br /></span>
            <div class="progress">
                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"><span style="color: white;">(50/100 websites)</span></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="row" style="padding: 0px;">
            <div class="col" style="padding: 0px;">
                <h1 style="font-family: 'Abril Fatface', cursive;margin: 0px 0px -15px;color: rgb(208,226,228);">
                    desaw</h1><small style="font-family: 'Abhaya Libre', serif;color: rgb(208,226,228);">Data Engine
                    Search Across Web</small>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col d-xl-flex justify-content-xl-center align-items-xl-center">
                <form class="d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center">
                    <h5 style="color: rgb(208,226,228);">Keywords</h5>
                    <div class="form-group d-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center">
                        <label class="d-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center"
                               style="color: rgb(208,226,228);">Keyword list:&nbsp;<select
                                    class="form-control d-flex justify-content-center align-items-center align-self-center m-auto" id="keywords_list">
                            </select>
                            <button class="btn btn-danger d-flex justify-content-center align-items-center align-self-center m-auto"
                                    type="button" style="font-size: 15px;" onclick="removeKeyword()">Delete&nbsp;
                            </button>
                        </label></div>
                    <div class="form-group d-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center">
                        <label class="d-inline-flex justify-content-xl-center align-items-xl-center"
                               style="color: rgb(208,226,228);">&nbsp;Add:&nbsp;<input class="form-control" type="text" id="keyword">
                            <button class="btn btn-success" type="button" style="font-size: 15px;" onclick="addKeyword()">Add</button>
                        </label></div>
                    <h5 style="color: rgb(208,226,228);">Websites</h5>
                    <button class="btn btn-primary" type="button">Auto-load</button>
                    <div class="form-group d-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center">
                        <label class="d-inline-flex justify-content-xl-center align-items-xl-center"
                               style="color: rgb(208,226,228);">Websites list:&nbsp;<select class="form-control" id="websites_list">
                            </select>
                            <button class="btn btn-danger" type="button" onclick="removeWebsite()" style="font-size: 15px;">Delete&nbsp;</button>
                        </label></div>
                    <div class="form-group d-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center">
                        <label class="d-inline-flex justify-content-xl-center align-items-xl-center"
                               style="color: rgb(208,226,228);">&nbsp;Add:&nbsp;<input class="form-control" id="website" type="text">
                            <button class="btn btn-success" type="button" onclick="addWebsite()" style="font-size: 15px;">Add</button>
                        </label></div>
                    <h5 style="color: rgb(208,226,228);">Settings</h5>
                    <div class="form-group d-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-xl-center align-items-xl-center">
                        <label class="d-inline-flex justify-content-xl-center align-items-xl-center"
                               style="color: rgb(208,226,228);">&nbsp;Limit:&nbsp;<input class="form-control"
                                                                                         type="text"></label></div>
                    <div class="form-group d-flex d-lg-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                        <div class="form-check" style="margin: 10px;"><input class="form-check-input" type="checkbox"
                                                                             id="formCheck-1"><label
                                    class="form-check-label" for="formCheck-1"
                                    style="color: rgb(208,226,228);">CSV</label></div>
                        <div class="form-check" style="margin: 10px;"><input class="form-check-input" type="checkbox"
                                                                             id="formCheck-2"><label
                                    class="form-check-label" for="formCheck-1"
                                    style="color: rgb(208,226,228);">TXT</label></div>
                        <div class="form-check"><input class="form-check-input" type="checkbox" id="formCheck-3"><label
                                    class="form-check-label" for="formCheck-1"
                                    style="color: rgb(208,226,228);">DB</label></div>
                    </div>
                    <div class="form-group d-flex d-lg-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4"><label
                                    class="form-check-label" for="formCheck-4" style="color: rgb(208,226,228);">Save
                                result in DB</label></div>
                    </div>
                    <div class="form-group d-flex d-lg-flex d-xl-flex justify-content-center align-items-center align-self-center m-auto justify-content-lg-center align-items-lg-center justify-content-xl-center align-items-xl-center">
                        <button class="btn btn-primary d-xl-flex align-self-center justify-content-xl-center align-items-xl-center"
                                type="button">Start
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col"><small>Developped by CodeColors. Source code:&nbsp;<a
                            href="https://github.com/CodeColors/desaw" target="_blank">click here</a></small></div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    function addKeyword(){
        keyWord_val = document.getElementById('keyword');
        if(keyWord_val.value != "") {
            keyWords = document.getElementById('keywords_list');
            keyWords.options[keyWords.options.length] = new Option(keyWord_val.value, keyWord_val.value.toLowerCase());
        }
    }

    function removeKeyword(){
        keyWords = document.getElementById('keywords_list');
        keyWords.remove(keyWords.selectedIndex)
    }

    function addWebsite(){
        website_val = document.getElementById('website');
        if(website_val.value != "") {
            websites = document.getElementById('websites_list');
            websites.options[websites.options.length] = new Option(website_val.value, website_val.value.toLowerCase());
        }
    }

    function removeWebsite(){
        websites = document.getElementById('websites_list');
        websites.remove(websites.selectedIndex)
    }

</script>
</body>

</html>