# _ClearFollow API_

_Application Programming Interface_

## Interfacing with API

_Our API allows you to retrieve informations from our website via GET request and supports the following query parameters:_ 

1. _t (required) Query type._
- _This parameter specify the type of the query, u is for profile informations, m is for messages informations._
2. _q (required) Requested username._
- _The t parameter supports two values:_

> u = username [returns basic profile informations containing the following]
> 
> - id = returns the user Unique Id
> - username = returns the Username
> - first_name = returns the First Name
> - last_name = returns the Last Name
> - website = returns the website
> - location = returns the location
> - image = returns the profile avatar image
> - cover = returns the profile cover image
> - verified = returns whether user is verified or not [possible values: 0 (not verified); 1(verified);]

> m = username [returns a list of latest 20 message from an user containing the following]
> 
> - id = returns the Message Unique Id
> - by = returns the User Unique Id
> - message = returns the Message
> - type = returns the Message Type [possible values: map; game; video; food; visited; movie; music;
> - time = returns the date time when was published
> - likes = returns the number of likes

## Examples of requests

_For profile information from an user:_
_https://clearfollow.com/api.php?t=u&q=USERNAME_

_For a list of latest 20 messages from an user:_
_https://clearfollow.com/api.php?t=m&q=USERNAME_

## PHP Example

<?php
header('Content-Type: text/plain; charset=utf-8;'); 
$file = file_get_contents("http://clearfollow.com/api.php?t=m&q=USERNAME");
print_r(json_decode($file));
?> 

## License

_Open-Source GNU GPL 3.0_
