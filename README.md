**Create the module with namespace and module name**
---

## Run setup upgrade

php bin/magento setup:upgrade

Clear cache:
php bin/magento cache:clean

Give full permission to var and pub folders:
chmod -R 777 var pub

Compile the module
php bin/magento setup:di:compile

After created every files run setup:upgrade once again

and see the result by hitting url/helloworld
