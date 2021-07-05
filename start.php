<?php

//start dev server for public/


shell_exec("cd public/");
shell_exec("php -S localhost:8000 -t public/");
