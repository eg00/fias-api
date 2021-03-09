# Дома


## Список домов выбранной улицы по uuid.




> Example request:

```bash
curl -X GET \
    -G "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://fias1.test/api/streets/e0d16bc1-6789-4862-8004-7fa9fca3323a/houses',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
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
}
```
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


## Список квартир выбранного дома по uuid.




> Example request:

```bash
curl -X GET \
    -G "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://fias1.test/api/houses/3bd992c2-f0a1-46ea-a634-695c5c033b86',
    [
        'headers' => [
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```


> Example response (200):

```json
{
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
}
```
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
</form>



