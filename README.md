tnmk30-course-page
==================

The course web page for TNMK30, "Elektronisk Publicering" at ITN, Linköping University

###Deployment:
1. Change `rootUrl` in `config.json` to the website root
2. Change absolute path for the `RewriteEngine` in `.htaccess` to:
    
        /<website root>/index.php?page=$0
