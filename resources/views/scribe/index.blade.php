<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>FIAS API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: March 9 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
<script>
    var baseUrl = "http://fias1.test";
</script>
<script src="{{ asset("vendor/scribe/js/tryitout-2.5.3.js") }}"></script>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://fias1.test</code></pre><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Дома</h1>
<h2>Список домов выбранной улицы по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "6a205456-8168-4619-bd4e-379662a13952",
            "houseguid": "6a205456-8168-4619-bd4e-379662a13952",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "15",
            "full_address": [
                "15",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "7310e980-6568-48e7-8d04-d50e1ab5dddc",
            "houseguid": "7310e980-6568-48e7-8d04-d50e1ab5dddc",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "5В",
            "full_address": [
                "5В",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "80340a73-3ee0-429b-94f2-4b6ecde6a667",
            "houseguid": "80340a73-3ee0-429b-94f2-4b6ecde6a667",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "4",
            "full_address": [
                "4",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "8097d3dc-8e7a-4b8c-8a3e-8a5bf362b233",
            "houseguid": "8097d3dc-8e7a-4b8c-8a3e-8a5bf362b233",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "5А",
            "full_address": [
                "5А",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "a11c7735-f224-496c-9750-3f2358e620b6",
            "houseguid": "bdc30ce4-b26f-4962-a744-d3ca0117f8be",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "20",
            "full_address": [
                "20",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "a798114c-6471-45d1-be37-25035a2cfd64",
            "houseguid": "a8cf65b4-61ac-46f8-8153-86b84990d7d9",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "5",
            "full_address": [
                "5",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "a86be5b1-2a86-4c80-bb8b-1a61483baf19",
            "houseguid": "6a205456-8168-4619-bd4e-379662a13952",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "15",
            "full_address": [
                "15",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "a8cf65b4-61ac-46f8-8153-86b84990d7d9",
            "houseguid": "a8cf65b4-61ac-46f8-8153-86b84990d7d9",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "5",
            "full_address": [
                "5",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "b0c298be-0bb4-491d-bc27-536112f7346c",
            "houseguid": "b0c298be-0bb4-491d-bc27-536112f7346c",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "8А",
            "full_address": [
                "8А",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "b425fa5d-f7c8-41b3-8c04-5fe71e6d4219",
            "houseguid": "b425fa5d-f7c8-41b3-8c04-5fe71e6d4219",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "18А",
            "full_address": [
                "18А",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "bb50aac8-da0f-4205-a566-e634b256d6ac",
            "houseguid": "c282b45d-a413-46bb-8d75-c885e42ecfe5",
            "parentguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "housenum": "2",
            "full_address": [
                "2",
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-streets--uuid--houses" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-streets--uuid--houses"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-streets--uuid--houses"></code></pre>
</div>
<div id="execution-error-GETapi-streets--uuid--houses" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-streets--uuid--houses"></code></pre>
</div>
<form id="form-GETapi-streets--uuid--houses" data-method="GET" data-path="api/streets/{uuid}/houses" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-streets--uuid--houses', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-streets--uuid--houses" onclick="tryItOut('GETapi-streets--uuid--houses');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-streets--uuid--houses" onclick="cancelTryOut('GETapi-streets--uuid--houses');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-streets--uuid--houses" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/streets/{uuid}/houses</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-streets--uuid--houses" data-component="url" required  hidden>
<br>
id улицы.</p>
</form>
<h2>Список квартир выбранного дома по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": "3bd992c2-f0a1-46ea-a634-695c5c033b86",
        "houseguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
        "parentguid": "201df87f-e6a7-4aa3-a7e2-51df6f449986",
        "housenum": "38Б",
        "full_address": [
            "38Б",
            "ул. Темерницкая",
            "г. Шахты",
            "Ростовская область"
        ],
        "flats": [
            {
                "id": "60acd3c8-63fb-4c9e-99b2-2b7e5b7e55aa",
                "roomguid": "60acd3c8-63fb-4c9e-99b2-2b7e5b7e55aa",
                "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
                "flatnumber": "3",
                "full_address": [
                    "38Б",
                    "ул. Темерницкая",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "51c103c5-681a-4751-81f3-23cea9205e46",
                "roomguid": "51c103c5-681a-4751-81f3-23cea9205e46",
                "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
                "flatnumber": "2",
                "full_address": [
                    "38Б",
                    "ул. Темерницкая",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "11aed3e6-4237-4cd0-a28c-0e22a25a4332",
                "roomguid": "11aed3e6-4237-4cd0-a28c-0e22a25a4332",
                "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
                "flatnumber": "1",
                "full_address": [
                    "38Б",
                    "ул. Темерницкая",
                    "г. Шахты",
                    "Ростовская область"
                ]
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-houses--uuid-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-houses--uuid-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-houses--uuid-"></code></pre>
</div>
<div id="execution-error-GETapi-houses--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-houses--uuid-"></code></pre>
</div>
<form id="form-GETapi-houses--uuid-" data-method="GET" data-path="api/houses/{uuid}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-houses--uuid-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-houses--uuid-" onclick="tryItOut('GETapi-houses--uuid-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-houses--uuid-" onclick="cancelTryOut('GETapi-houses--uuid-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-houses--uuid-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/houses/{uuid}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-houses--uuid-" data-component="url" required  hidden>
<br>
id дома.</p>
</form><h1>Города</h1>
<h2>Список городов федерального, областного,</h2>
<p>республиканского, краевого, окружного значения выбранного региона по uuid.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/cities',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "12de5b32-b398-41d0-9364-41cdddd01357",
            "aoguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
            "name": "Шахты",
            "shortname": "г",
            "full_address": [
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "b503a537-bbd1-4108-ab57-571b3c986c3e",
            "aoguid": "c1cfe4b9-f7c2-423c-abfa-6ed1c05a15c5",
            "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
            "name": "Ростов-на-Дону",
            "shortname": "г",
            "full_address": [
                "г. Ростов-на-Дону",
                "Ростовская область"
            ]
        },
        {
            "id": "8603c5a5-bdd9-4750-9bce-96b12e1f99b5",
            "aoguid": "76cb0cf6-49a5-4852-b45d-99e4ce12a7ea",
            "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
            "name": "Каменск-Шахтинский",
            "shortname": "г",
            "full_address": [
                "г. Каменск-Шахтинский",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-regions--uuid--cities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions--uuid--cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions--uuid--cities"></code></pre>
</div>
<div id="execution-error-GETapi-regions--uuid--cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions--uuid--cities"></code></pre>
</div>
<form id="form-GETapi-regions--uuid--cities" data-method="GET" data-path="api/regions/{uuid}/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions--uuid--cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions--uuid--cities" onclick="tryItOut('GETapi-regions--uuid--cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions--uuid--cities" onclick="cancelTryOut('GETapi-regions--uuid--cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions--uuid--cities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions/{uuid}/cities</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-regions--uuid--cities" data-component="url" required  hidden>
<br>
id региона.</p>
</form>
<h2>Список городов районного (окружного) значения выбранного округа/района по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16/cities" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16/cities"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16/cities',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "03f3b9d0-f9a4-4677-b672-3ba9fee8043f",
            "aoguid": "272a1c69-4d9b-4d1c-a63e-97f86081bae3",
            "parentguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
            "name": "Крутая Горка",
            "shortname": "п",
            "full_address": [
                "п. Крутая Горка",
                "р-н. Каменский",
                "Ростовская область"
            ]
        },
        {
            "id": "4fcd8cf6-5e89-491f-a76c-6b82c3e0089f",
            "aoguid": "ece1dc5e-5204-422b-b25d-117b3d6d08e0",
            "parentguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
            "name": "Скородумовка",
            "shortname": "х",
            "full_address": [
                "х. Скородумовка",
                "р-н. Каменский",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-areas--uuid--cities" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-areas--uuid--cities"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-areas--uuid--cities"></code></pre>
</div>
<div id="execution-error-GETapi-areas--uuid--cities" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-areas--uuid--cities"></code></pre>
</div>
<form id="form-GETapi-areas--uuid--cities" data-method="GET" data-path="api/areas/{uuid}/cities" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-areas--uuid--cities', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-areas--uuid--cities" onclick="tryItOut('GETapi-areas--uuid--cities');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-areas--uuid--cities" onclick="cancelTryOut('GETapi-areas--uuid--cities');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-areas--uuid--cities" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/areas/{uuid}/cities</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-areas--uuid--cities" data-component="url" required  hidden>
<br>
id округа/района.</p>
</form>
<h2>Список улиц выбранного города по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": "12de5b32-b398-41d0-9364-41cdddd01357",
        "aoguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
        "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
        "name": "Шахты",
        "shortname": "г",
        "full_address": [
            "г. Шахты",
            "Ростовская область"
        ],
        "streets": [
            {
                "id": "e0d16bc1-6789-4862-8004-7fa9fca3323a",
                "aoguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
                "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "name": "Полевой",
                "shortname": "пер",
                "full_address": [
                    "пер. Полевой",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "fdfb4f3e-907d-4ff0-87fd-b634aaeb6fa0",
                "aoguid": "f9c4b89b-d83b-4228-ac85-012281b3c8f3",
                "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "name": "Хетагурова",
                "shortname": "ул",
                "full_address": [
                    "ул. Хетагурова",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "f8c6d39a-768b-4fec-8e44-d3ed30037e65",
                "aoguid": "451000b2-58bf-4ab4-af61-7abadfe0e636",
                "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "name": "Бебеля",
                "shortname": "ул",
                "full_address": [
                    "ул. Бебеля",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "2e11c5c9-1f65-4c5e-a6bc-770e6985268d",
                "aoguid": "3b26bf1e-baa8-4861-8ff8-200715d8b8cf",
                "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "name": "Делегатская",
                "shortname": "ул",
                "full_address": [
                    "ул. Делегатская",
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "68da96d9-9674-4546-b36e-bf6f5573bfce",
                "aoguid": "c344c8e1-fdec-4daf-8113-79831848d917",
                "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "name": "Добрынинский",
                "shortname": "пер",
                "full_address": [
                    "пер. Добрынинский",
                    "г. Шахты",
                    "Ростовская область"
                ]
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-cities--uuid-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cities--uuid-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cities--uuid-"></code></pre>
</div>
<div id="execution-error-GETapi-cities--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cities--uuid-"></code></pre>
</div>
<form id="form-GETapi-cities--uuid-" data-method="GET" data-path="api/cities/{uuid}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cities--uuid-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cities--uuid-" onclick="tryItOut('GETapi-cities--uuid-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cities--uuid-" onclick="cancelTryOut('GETapi-cities--uuid-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cities--uuid-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cities/{uuid}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-cities--uuid-" data-component="url" required  hidden>
<br>
id города.</p>
</form><h1>Квартиры</h1>
<h2>Список квартир выбранного дома по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86/flats" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86/flats"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86/flats',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "60acd3c8-63fb-4c9e-99b2-2b7e5b7e55aa",
            "roomguid": "60acd3c8-63fb-4c9e-99b2-2b7e5b7e55aa",
            "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
            "flatnumber": "3",
            "full_address": [
                "38Б",
                "ул. Темерницкая",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "51c103c5-681a-4751-81f3-23cea9205e46",
            "roomguid": "51c103c5-681a-4751-81f3-23cea9205e46",
            "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
            "flatnumber": "2",
            "full_address": [
                "38Б",
                "ул. Темерницкая",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "11aed3e6-4237-4cd0-a28c-0e22a25a4332",
            "roomguid": "11aed3e6-4237-4cd0-a28c-0e22a25a4332",
            "parentguid": "8ef117b7-05d1-4e6a-8254-b174429de1c0",
            "flatnumber": "1",
            "full_address": [
                "38Б",
                "ул. Темерницкая",
                "г. Шахты",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-houses--uuid--flats" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-houses--uuid--flats"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-houses--uuid--flats"></code></pre>
</div>
<div id="execution-error-GETapi-houses--uuid--flats" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-houses--uuid--flats"></code></pre>
</div>
<form id="form-GETapi-houses--uuid--flats" data-method="GET" data-path="api/houses/{uuid}/flats" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-houses--uuid--flats', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-houses--uuid--flats" onclick="tryItOut('GETapi-houses--uuid--flats');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-houses--uuid--flats" onclick="cancelTryOut('GETapi-houses--uuid--flats');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-houses--uuid--flats" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/houses/{uuid}/flats</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-houses--uuid--flats" data-component="url" required  hidden>
<br>
id дома.</p>
</form><h1>Округа и районы</h1>
<h2>Список округов и районов выбранного региона по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/areas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/areas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613/areas',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "18e19c1b-2983-4c07-8375-e86d6e1274bd",
            "aoguid": "667b79ba-670c-44b1-92d6-78dfb54ad821",
            "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
            "name": "Миллеровский",
            "shortname": "р-н",
            "full_address": [
                "р-н. Миллеровский",
                "Ростовская область"
            ]
        },
        {
            "id": "178aab04-a05b-4a76-9cd4-e10f631aff16",
            "aoguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
            "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
            "name": "Каменский",
            "shortname": "р-н",
            "full_address": [
                "р-н. Каменский",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-regions--uuid--areas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions--uuid--areas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions--uuid--areas"></code></pre>
</div>
<div id="execution-error-GETapi-regions--uuid--areas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions--uuid--areas"></code></pre>
</div>
<form id="form-GETapi-regions--uuid--areas" data-method="GET" data-path="api/regions/{uuid}/areas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions--uuid--areas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions--uuid--areas" onclick="tryItOut('GETapi-regions--uuid--areas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions--uuid--areas" onclick="cancelTryOut('GETapi-regions--uuid--areas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions--uuid--areas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions/{uuid}/areas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-regions--uuid--areas" data-component="url" required  hidden>
<br>
id региона.</p>
</form>
<h2>Список городов выбранного округа/района по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/areas/178aab04-a05b-4a76-9cd4-e10f631aff16',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": "178aab04-a05b-4a76-9cd4-e10f631aff16",
        "aoguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
        "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
        "name": "Каменский",
        "shortname": "р-н",
        "full_address": [
            "р-н. Каменский",
            "Ростовская область"
        ],
        "cities": [
            {
                "id": "aec8040c-ba5e-4c6d-b187-90c64f9d860d",
                "aoguid": "4bf3723b-7abb-4066-80ba-ddca5e8437e1",
                "parentguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
                "name": "Березовый",
                "shortname": "х",
                "full_address": [
                    "х. Березовый",
                    "р-н. Каменский",
                    "Ростовская область"
                ]
            },
            {
                "id": "21927bee-31d5-4c9c-a168-c9b02c0d9e09",
                "aoguid": "175d5dac-e289-48e2-b77b-6da2dd4b05c0",
                "parentguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
                "name": "Васильевский",
                "shortname": "п",
                "full_address": [
                    "п. Васильевский",
                    "р-н. Каменский",
                    "Ростовская область"
                ]
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-areas--uuid-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-areas--uuid-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-areas--uuid-"></code></pre>
</div>
<div id="execution-error-GETapi-areas--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-areas--uuid-"></code></pre>
</div>
<form id="form-GETapi-areas--uuid-" data-method="GET" data-path="api/areas/{uuid}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-areas--uuid-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-areas--uuid-" onclick="tryItOut('GETapi-areas--uuid-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-areas--uuid-" onclick="cancelTryOut('GETapi-areas--uuid-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-areas--uuid-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/areas/{uuid}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-areas--uuid-" data-component="url" required  hidden>
<br>
id округа/района.</p>
</form><h1>Регионы</h1>
<h2>Список регионов</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/regions" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/regions"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/regions',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "00170cae-8b4e-47ad-8473-27987a9644d7",
            "aoguid": "43909681-d6e1-432d-b61f-ddac393cb5da",
            "name": "Приморский край"
        },
        {
            "id": "b92e6fc1-6025-42b4-930f-49e8a096c355",
            "aoguid": "6466c988-7ce3-45e5-8b97-90ae16cb1249",
            "name": "Иркутская область"
        },
        {
            "id": "e76abf09-3148-42f6-85db-51edb09e72b7",
            "aoguid": "92b30014-4d52-4e2e-892d-928142b924bf",
            "name": "Свердловская область"
        },
        {
            "id": "35211cd5-16fe-4dab-9f45-2ca1043e0f8d",
            "aoguid": "5e465691-de23-4c4e-9f46-f35a125b5970",
            "name": "Орловская область"
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-regions" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions"></code></pre>
</div>
<div id="execution-error-GETapi-regions" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions"></code></pre>
</div>
<form id="form-GETapi-regions" data-method="GET" data-path="api/regions" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions" onclick="tryItOut('GETapi-regions');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions" onclick="cancelTryOut('GETapi-regions');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions</code></b>
</p>
</form>
<h2>Список городов, округов и районов выбранного региона по uuid</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/regions/052751b8-8f2a-447d-a8b2-fc2068c7e613',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": "052751b8-8f2a-447d-a8b2-fc2068c7e613",
        "aoguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
        "name": "Ростовская область",
        "cities": [
            {
                "id": "8603c5a5-bdd9-4750-9bce-96b12e1f99b5",
                "aoguid": "76cb0cf6-49a5-4852-b45d-99e4ce12a7ea",
                "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
                "name": "Каменск-Шахтинский",
                "shortname": "г",
                "full_address": [
                    "г. Каменск-Шахтинский",
                    "Ростовская область"
                ]
            },
            {
                "id": "12de5b32-b398-41d0-9364-41cdddd01357",
                "aoguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
                "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
                "name": "Шахты",
                "shortname": "г",
                "full_address": [
                    "г. Шахты",
                    "Ростовская область"
                ]
            },
            {
                "id": "b503a537-bbd1-4108-ab57-571b3c986c3e",
                "aoguid": "c1cfe4b9-f7c2-423c-abfa-6ed1c05a15c5",
                "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
                "name": "Ростов-на-Дону",
                "shortname": "г",
                "full_address": [
                    "г. Ростов-на-Дону",
                    "Ростовская область"
                ]
            }
        ],
        "areas": [
            {
                "id": "18e19c1b-2983-4c07-8375-e86d6e1274bd",
                "aoguid": "667b79ba-670c-44b1-92d6-78dfb54ad821",
                "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
                "name": "Миллеровский",
                "shortname": "р-н",
                "full_address": [
                    "р-н. Миллеровский",
                    "Ростовская область"
                ]
            },
            {
                "id": "178aab04-a05b-4a76-9cd4-e10f631aff16",
                "aoguid": "f8fa5b30-5020-476d-91b0-dcd6bd0054e6",
                "parentguid": "f10763dc-63e3-48db-83e1-9c566fe3092b",
                "name": "Каменский",
                "shortname": "р-н",
                "full_address": [
                    "р-н. Каменский",
                    "Ростовская область"
                ]
            }
        ]
    }
}</code></pre>
<div id="execution-results-GETapi-regions--uuid-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-regions--uuid-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-regions--uuid-"></code></pre>
</div>
<div id="execution-error-GETapi-regions--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-regions--uuid-"></code></pre>
</div>
<form id="form-GETapi-regions--uuid-" data-method="GET" data-path="api/regions/{uuid}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-regions--uuid-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-regions--uuid-" onclick="tryItOut('GETapi-regions--uuid-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-regions--uuid-" onclick="cancelTryOut('GETapi-regions--uuid-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-regions--uuid-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/regions/{uuid}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-regions--uuid-" data-component="url" required  hidden>
<br>
id (не aoguid) региона.</p>
</form><h1>Улицы</h1>
<h2>Список улиц выбранного города по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357/streets" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357/streets"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/cities/12de5b32-b398-41d0-9364-41cdddd01357/streets',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": "e0d16bc1-6789-4862-8004-7fa9fca3323a",
            "aoguid": "8d8f11cd-13b3-4123-a353-2cfe0b295211",
            "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "name": "Полевой",
            "shortname": "пер",
            "full_address": [
                "пер. Полевой",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "fdfb4f3e-907d-4ff0-87fd-b634aaeb6fa0",
            "aoguid": "f9c4b89b-d83b-4228-ac85-012281b3c8f3",
            "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "name": "Хетагурова",
            "shortname": "ул",
            "full_address": [
                "ул. Хетагурова",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "f8c6d39a-768b-4fec-8e44-d3ed30037e65",
            "aoguid": "451000b2-58bf-4ab4-af61-7abadfe0e636",
            "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "name": "Бебеля",
            "shortname": "ул",
            "full_address": [
                "ул. Бебеля",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "2e11c5c9-1f65-4c5e-a6bc-770e6985268d",
            "aoguid": "3b26bf1e-baa8-4861-8ff8-200715d8b8cf",
            "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "name": "Делегатская",
            "shortname": "ул",
            "full_address": [
                "ул. Делегатская",
                "г. Шахты",
                "Ростовская область"
            ]
        },
        {
            "id": "68da96d9-9674-4546-b36e-bf6f5573bfce",
            "aoguid": "c344c8e1-fdec-4daf-8113-79831848d917",
            "parentguid": "dee2e80e-f2e1-4a68-93b0-b7b89b6f3e74",
            "name": "Добрынинский",
            "shortname": "пер",
            "full_address": [
                "пер. Добрынинский",
                "г. Шахты",
                "Ростовская область"
            ]
        }
    ]
}</code></pre>
<div id="execution-results-GETapi-cities--uuid--streets" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-cities--uuid--streets"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-cities--uuid--streets"></code></pre>
</div>
<div id="execution-error-GETapi-cities--uuid--streets" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-cities--uuid--streets"></code></pre>
</div>
<form id="form-GETapi-cities--uuid--streets" data-method="GET" data-path="api/cities/{uuid}/streets" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-cities--uuid--streets', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-cities--uuid--streets" onclick="tryItOut('GETapi-cities--uuid--streets');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-cities--uuid--streets" onclick="cancelTryOut('GETapi-cities--uuid--streets');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-cities--uuid--streets" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/cities/{uuid}/streets</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-cities--uuid--streets" data-component="url" required  hidden>
<br>
id города.</p>
</form>
<h2>Список домов выбранной улицы по uuid.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a',
    [
        'headers' =&gt; [
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<div id="execution-results-GETapi-streets--uuid-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-streets--uuid-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-streets--uuid-"></code></pre>
</div>
<div id="execution-error-GETapi-streets--uuid-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-streets--uuid-"></code></pre>
</div>
<form id="form-GETapi-streets--uuid-" data-method="GET" data-path="api/streets/{uuid}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-streets--uuid-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-streets--uuid-" onclick="tryItOut('GETapi-streets--uuid-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-streets--uuid-" onclick="cancelTryOut('GETapi-streets--uuid-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-streets--uuid-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/streets/{uuid}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>uuid</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="uuid" data-endpoint="GETapi-streets--uuid-" data-component="url" required  hidden>
<br>
id города.</p>
</form>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php"];
        setupLanguages(languages);
    });
</script>
</body>
</html>