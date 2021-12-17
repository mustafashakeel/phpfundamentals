'''
Created on 15.10.2012

Creates the 2nd kind of name interpreter groups.
Normally, you create a prototype group, export it as .lsq file from LimeSurvey, and then
split that file in two pre-text files and one post-text file according to the sample files.
Of course, if you change questions you also need to exchange/adapt the code for 
respective questions in this script! 

@author: Sascha Holzhauer
'''

import codecs

# Used to label groups and pre-text files
ni_groupid = "2"

# In most cases, the first group/first sampled alter is inserted manually, then used as template for this script. That's way one usually starts by 2
start = 2
end = 8
# This was inserted because questions got reordered after import. However, this does not seem to have any effect and in most cases one needs to reorder
# questions after import manually anyway.
group_order = 10 # start value that is incremented

gid = "1"

preText1File = "./preText1NI-2.txt"
preText2File = "./preText2NI-2.txt"
postTextFile = "./postTextNI-2.txt"




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
    <gid><![CDATA[""" + gid + """]]></gid>
    <sid><![CDATA[476335]]></sid>
    <group_name><![CDATA[(""" + ni_groupid + """) Angaben zu {ng_""" + str(i) + """}]]></group_name>
    <group_order><![CDATA[""" + str(group_order) + """)]]></group_order>
    <description/>
    <language><![CDATA[de]]></language>
    <randomization_group/>
    <grelevance><![CDATA[!(is_empty(ng_""" + str(i) + """))]]></grelevance>
   </row>\n
   <row>
    <gid><![CDATA[""" + gid + """]]></gid>
    <sid><![CDATA[476335]]></sid>
    <group_name><![CDATA[(""" + ni_groupid + """) Informations about {ng_""" + str(i) + """}]]></group_name>
    <group_order><![CDATA[""" + str(group_order) + """]]></group_order>
    <description/>
    <language><![CDATA[en]]></language>
    <randomization_group/>
    <grelevance><![CDATA[!(is_empty(ng_""" + str(i) + """))]]></grelevance>
   </row>""")
    
    group_order = group_order + 1
    inputLine =  prefile2.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  prefile2.readline()   
        
    outfile.write("""\n   <row>
    <qid><![CDATA[39]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_frequency_""" + str(i) + """]]></title>
    <question><![CDATA[Wie häufig haben Sie Kontakt zu <b>{ng_""" + str(i) + """}</b>?]]></question>
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
    <qid><![CDATA[39]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_frequency_""" + str(i) + """]]></title>
    <question><![CDATA[How often do you meet <b>{ng_""" + str(i) + """}</b>?]]></question>
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
    <qid><![CDATA[2]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[K]]></type>
    <title><![CDATA[ni_closeness_""" + str(i) + """]]></title>
    <question><![CDATA[Stellen Sie nun den Balken mit der Maus auf die Stelle, die der jeweiligen Antwort entspricht:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>
   <row>
    <qid><![CDATA[2]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[K]]></type>
    <title><![CDATA[ni_closeness_""" + str(i) + """]]></title>
    <question><![CDATA[Now, place the bar at that place on the line that corresponds to your answer:]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[1]]></relevance>
   </row>\n""")
        
    outfile.write("""</rows>
 </questions>
 <subquestions>
  <fields>
   <fieldname>qid</fieldname>
   <fieldname>parent_qid</fieldname>
   <fieldname>sid</fieldname>
   <fieldname>gid</fieldname>
   <fieldname>type</fieldname>
   <fieldname>title</fieldname>
   <fieldname>question</fieldname>
   <fieldname>preg</fieldname>
   <fieldname>help</fieldname>
   <fieldname>other</fieldname>
   <fieldname>mandatory</fieldname>
   <fieldname>question_order</fieldname>
   <fieldname>language</fieldname>
   <fieldname>scale_id</fieldname>
   <fieldname>same_default</fieldname>
   <fieldname>relevance</fieldname>
  </fields>
  <rows>
   <row>
    <qid><![CDATA[37]]></qid>
    <parent_qid><![CDATA[2]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[closeness]]></title>
    <question><![CDATA[Geben Sie an, wie verbunden Sie sich mit <b>{ng_""" + str(i) + """}</b> fühlen. <br>Als besonders eng verbunden sind Personen anzusehen,...<ul><li>...mit denen Sie wichtige, persönli-che Dinge besprechen können.</li><li>...die Sie stets um Hilfe bitten können.</li><li>...mit denen Sie gern noch mehr Zeit verbringen würden.</li></ul>|sehr eng|entfernt]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[37]]></qid>
    <parent_qid><![CDATA[2]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[closeness]]></title>
    <question><![CDATA[Specify how close is your relation with <b>{ng_""" + str(i) + """}</b>.<br>Very close are people...<ul><li>...with whom you can talk about important matters.</li><li>...who you would aks for help.</li><li>...with whom you would like to spent more time.</li></ul>|very close|distant]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[38]]></qid>
    <parent_qid><![CDATA[2]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[topic]]></title>
    <question><![CDATA[Wie leicht finden Sie mit <b>{ng_""" + str(i) + """}</b> ein gemeinsames Thema?|gar nicht| sehr leicht]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[38]]></qid>
    <parent_qid><![CDATA[2]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[1]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[topic]]></title>
    <question><![CDATA[How easy is it to talk about a common topic with <b>{ng_""" + str(i) + """}</b>?|not easy at all|very easy]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>""")
   
    inputLine =  postfile.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  postfile.readline()   
    
    prefile1.close()
    prefile2.close()
    postfile.close()

    outfile.close()

print("Ready")