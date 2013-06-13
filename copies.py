#! /bin/python
from os import *
import re
import shutil
f = []
for (dirpath,dirname,filenames) in walk("."):
    f.extend(filenames)
    break
fset = []
for filename in f:
    if filename.endswith("_view.php"):
        filename = filename[:-9]
        if filename != "employee":
            fset.append(filename)
#to make delete action

#for filename in fset:
#    filename = filename + "_delete_action.php"
#    print filename
#    shutil.copy("employee_delete_action.php",filename)

#to make modify
#for filename in fset:
#    filemod = filename + "_modify.php"
#    fileview = filename + "_view.php"
#    print filemod
#    shutil.copy(fileview,filemod)

#to make delete
#for filename in fset:
#    filedel = filename + "_delete.php"
#    fileview = filename + "_view.php"
#    print filedel
#    shutil.copy(fileview,filedel)

#to make insert_modify
#for filename in fset:
#    fileinsmod = filename + "_insert_modify.php"
#    fileview = filename + "_insert.php"
#    print fileinsmod
#    shutil.copy(fileview,fileinsmod)

#to make modify action
#for filename in fset:
#    filemodac = filename + "_modify_action.php"
#    fileform = filename + "_form.php"
#    print filemodac
#    shutil.copy(fileform,filemodac)

#to insert data in delete
for filename in fset:
    filedel = filename + "_delete.php"
    fileview = filename + "_view.php"
    for lineNo in file(filedel):
        if "while($row = mysql_fetch_array($result))" in lineNo:
            print  filedel
            break

