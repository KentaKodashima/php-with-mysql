# PHP with MySQL Essential Training course on LinkedIn Learning

## Objective
- Learn PHP basics
- Learn database basics (MySQL)

## URL Parameters (Query Parameters)
It allows us to pass data from one page to another.  
URL parametes are useful, because they allow us to pass data from one page to another via links.

### Format
'? + a name of the parameter + '=' + value

```
page.php?page=2

page.php?category=7&page=3

https://www.google.com/search?q=php
```
### Super global variable: $_GET
When a new page request is received, PHP is automatically going to take all of those URL parameters that were sent and put them into an associate of array where we can access them. The array is called super global variable.

- Available in all variable scopes
- Assigned by PHP before processing page code
- Values are always strings

```
<?php
  $page = $_GET['page'];
  echo gettype($page); // string

  $page_as_int = (int) $_GET['page'];
  echo gettype($page_as_int); // integer
?>
```

## Encoding URL Parameters
In case the url contains a special character such as '&', we need to encode it (read it as just URL string).

List of reserved strings in URL: [https://www.w3schools.com/tags/ref_urlencode.asp](https://www.w3schools.com/tags/ref_urlencode.asp)

### urlencode vs. rawurlencode
- Letters, numbers, underscore, and dash are unchanged
- Reserved characters are encoded
- rawurlencode: spaces become "%20"
- urlencode: spaces become "+"

#### rawurlencode the path
- Path is the part before the "?"
- Spaces must be encoded as "%20"

#### urlencode the query string
- Query string is the part after the "?"
- Spaces are better encode as "+"

**NOTE:**
When PHP loads an URL, it automatically decodes the URL, and store it in $_GET

## Encoding for HTML

### Cross-Site Scripting
- XSS
- Attacker tricks a web page into outputting JavaScript
- Code is trusted by the browser and executed
- Major security vulnerability

```
// Cases we want to avoid

/LinkedInLearning/FreePHPTutorialWithMySQL/project/globe_bank/public/staff/subjects/show.php?id=<strong>1</strong>

/LinkedInLearning/FreePHPTutorialWithMySQL/project/globe_bank/public/staff/subjects/show.php?id=<script>alert('Gotcha')</script>
```