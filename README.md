# Login Validator

A simple login validator for those, who does not want to have offensive nicknames in their database.

As an attachment to PHP file, which does all the work, I added a simple HTML/JS template to show example of AJAX usage.

## Files

This tiny project contains two files:
+ ```test.html```
+ ```validateLogins.php```

## Setting up

To make validator work, you only have to type all the words that you want to exclude as shown in example:
```php
$badData = array('write', 'here', 'all', 'words', 
                'that', 'you', 'dont', 'want', 'to',
                'be', 'in', 'your', 'database');
```
You can find this array in php file.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## Contact

You can contact me via email: 
<adrian.goral@gmail.com>

## License
[MIT](https://choosealicense.com/licenses/mit/)
