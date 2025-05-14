# Litespeed-Zen-Cart
Litespeed Plugin for Zen Cart


I dont know the new encapsulated method... Maybe some help on that.




// In admin/includes/boxes/tools_dhtml.php or equivalent add:

$za_contents[] = ['text' => 'Purge LSCache', 'link' => zen_href_link('lscache_purge.php')];
