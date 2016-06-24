---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

# Info

Welcome to the generated API reference.

# Available routes
## Show all Settlements.

> Example request:

```bash
curl "http://localhost/api/Settlements?api_token={yourApiToken}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/Settlements",
    "method": "GET",
        "headers": {
    "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
console.log(response);
});
```

    > Example response:

    ```json
    {
    "cases": {
        "total": 1009,
        "per_page": 100,
        "current_page": 1,
        "last_page": 11,
        "next_page_url": "http:\/\/localhostapi\/Settlements?page=2",
        "prev_page_url": null,
        "from": 1,
        "to": 100,
        "data": [
            {
                "ID": 40002993,
                "Case_Name": "BP Fair Fund",
                "Settlement_Fund": 525000000,
                "Deadline": "2016-09-13",
                "Start": "2010-04-26",
                "End": "2010-05-26",
                "Web_Status": "Current",
                "Claim_URL": "http:\/\/bpfairfund.com\/wp-content\/uploads\/2016\/04\/RFS_BP_ClaimForm-04-26-2016.pdf",
                "Notice_URL": "http:\/\/bpfairfund.com\/wp-content\/uploads\/2016\/04\/RFS_BP_Announcement-04-25-2016.pdf",
                "Case_Number": "12-cv-2774",
                "Court": "Eastern District of Louisiana",
                "Issuer": "BP",
                "Plaintiffs_Counsel": "Securities and Exchange Commission",
                "Admin_ID": 20000022,
                "Notes": "Purchasers of BP American Depository Shares during the class period are eligible to participate.",
                "time": "2016-05-03 20:34:32"
            },
            {
                "ID": 40002947,
                "Case_Name": "Merck & Co. Vioxx Litigation",
                "Settlement_Fund": 1062000000,
                "Deadline": "2016-09-12",
                "Start": "1999-05-21",
                "End": "2004-10-29",
                "Web_Status": "Current",
                "Claim_URL": "https:\/\/www.merckvioxxsecuritieslitigation.com\/Content\/Documents\/Claim%20Form.pdf",
                "Notice_URL": "https:\/\/www.merckvioxxsecuritieslitigation.com\/Content\/Documents\/Notice.pdf",
                "Case_Number": "MDL No. 1658 (SRC)",
                "Court": "District o New Jersey",
                "Issuer": "Merck & Co., Inc.",
                "Plaintiffs_Counsel": "Salvatore J. Graziano, Esq., of Bernstein Litowitz Berger & Grossmann LLP, 1251 Avenue of the Americas, New York, NY 10020, (800) 380-8496",
                "Admin_ID": 20000006,
                "Notes": "Purchasers of common stock or call options, and sellers of put options, are eligible to participate.",
                "time": "2016-03-23 20:10:58"
            },
        ]
    },
    "status": null,
    "search": null,
    "sort": null,
    "order": null
}
    ```

### HTTP Request
`GET api/Settlements`

`HEAD api/Settlements`
