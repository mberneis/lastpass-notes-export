# lastpass-notes-export
Utility to export Lastpass Secure Notes

## Usage (tested with Chrome)
> Goto LastPass Menu:
> Account Options -> Advanced -> Print -> Secure Notes
### Notes appear in Browser Window
> In Chrome: 
> File -> Save Page As -> (Format: WebPage Complete)  in code directory (will be excluded by `.gitignore`)
> Run `php export.php` -> will generate `Print.csv`

This Project uses the `simple_html_dom` library from  Website: http://sourceforge.net/projects/simplehtmldom/

Feel free to update the `simple_html_dom.php` file to the latest version.