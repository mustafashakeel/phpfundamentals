'''
Created on 15.10.2012

Creates the first kind of name interpreter groups.
Normally, you create a prototype group, export it as .lsq file from LimeSurvey, and then
split that file in two pre-text files and one post-text file according to the sample files.
Of course, if you change questions you also need to exchange/adapt the code for 
respective questions in this script! 

@author: Sascha Holzhauer
'''

import codecs

# Used to label groups and pre-text files
ni_groupid = "1"

# In most cases, the first group/first sampled alter is inserted manually, then used as template for this script. That's way one usually starts by 2
start = 2
end = 8

preText1File = "./preText1NI-1.txt"
preText2File = "./preText2NI-1.txt"
postTextFile = "./postTextNI-1.txt"




for i in range(start, end + 1):
    outputFile = "./question_ni_" + ni_groupid  + "-" + str(i) + ".lsg"
    
    prefile1 = open(preText1File, 'r')
    prefile2 = open(preText2File, 'r')
    postfile = open(postTextFile, 'r')
    
    outfile = codecs.open(outputFile, 'w', "utf-8")
    
    inputLine =  prefile1.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  prefile1.readline()
         
    outfile.write("""\n   <row>
    <gid><![CDATA[154]]></gid>
    <sid><![CDATA[476335]]></sid>
    <group_name><![CDATA[(""" + ni_groupid + """) Angaben zu {ng_""" + str(i) + """}]]></group_name>
    <group_order><![CDATA[5]]></group_order>
    <description/>
    <language><![CDATA[de]]></language>
    <randomization_group/>
    <grelevance><![CDATA[!(is_empty(ng_""" + str(i) + """))]]></grelevance>
   </row>\n
   <row>
    <gid><![CDATA[154]]></gid>
    <sid><![CDATA[476335]]></sid>
    <group_name><![CDATA[(""" + ni_groupid + """) Informations about {ng_""" + str(i) + """}]]></group_name>
    <group_order><![CDATA[5]]></group_order>
    <description/>
    <language><![CDATA[en]]></language>
    <randomization_group/>
    <grelevance><![CDATA[!(is_empty(ng_""" + str(i) + """))]]></grelevance>
   </row>""")
     
    inputLine =  prefile2.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  prefile2.readline()   
        
    outfile.write("""\n   <row>
    <qid><![CDATA[1103]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[G]]></type>
    <title><![CDATA[ni_gender_""" + str(i) + """]]></title>
    <question/>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[0]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1103]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[G]]></type>
    <title><![CDATA[ni_gender_""" + str(i) + """]]></title>
    <question/>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[0]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1104]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[N]]></type>
    <title><![CDATA[ni_age_""" + str(i) + """]]></title>
    <question><![CDATA[Alter von <b>{ng_""" + str(i) + """}</b>:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[N]]></mandatory>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1104]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[N]]></type>
    <title><![CDATA[ni_age_""" + str(i) + """]]></title>
    <question><![CDATA[Age of <b>{ng_""" + str(i) + """}</b>:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[N]]></mandatory>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1105]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[S]]></type>
    <title><![CDATA[ni_livingplace_""" + str(i) + """]]></title>
    <question><![CDATA[Tragen Sie hier bitte ein, in welchem Ort <b>{ng_""" + str(i) + """}</b> wohnt (bei größeren Orten möglichst auch den Stadtteil):]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1105]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[S]]></type>
    <title><![CDATA[ni_livingplace_""" + str(i) + """]]></title>
    <question><![CDATA[Entry the place of residence of <b>{ng_""" + str(i) + """}</b> (for larger places also specify the district, please):]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1106]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_commeans1_""" + str(i) + """]]></title>
    <question><![CDATA[Geben Sie das häufigste Kommunikationsmittel mit <b>{ng_""" + str(i) + """}</b> an:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1106]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_commeans1_""" + str(i) + """]]></title>
    <question><![CDATA[Markt the mostly used communication means with <b>{ng_""" + str(i) + """}</b>:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1606]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_topic_""" + str(i) + """]]></title>
    <question><![CDATA[Über welche Themen sprechen oder schreiben Sie mit {ng_""" + str(i) + """}?]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1606]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[154]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_topic_""" + str(i) + """]]></title>
     <question><![CDATA[About which topics are you talking or writing with {ng_""" + str(i) + """}?]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>\n""")
        
    inputLine =  postfile.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  postfile.readline()   
    
    prefile1.close()
    prefile2.close()
    postfile.close()

    outfile.close()

print("Ready")