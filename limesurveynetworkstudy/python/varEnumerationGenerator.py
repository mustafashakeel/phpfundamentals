'''
Created on 17.10.2012

Very simple script that outputs enumeration of variables.
This is helpful for the creation of validation and other equations.

@author: Sascha Holzhauer
'''

var_name_middle = "family"

text = ''

for i in range(1,9):
    text = text + "ng_" + var_name_middle + "_" + str(i) + ".NAOK, " 
print(text)