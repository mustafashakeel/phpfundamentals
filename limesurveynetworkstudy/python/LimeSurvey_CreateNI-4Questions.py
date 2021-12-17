'''
Creates the 4th kind of name interpreter groups (3rd one is array questions).
Normally, you create a prototype group, export it as .lsq file from LimeSurvey, and then
split that file in two pre-text files and one post-text file according to the sample files.
Of course, if you change questions you also need to exchange/adapt the code for 
respective questions in this script! 

@author: Sascha Holzhauer
'''

import codecs

# Used to label groups and pre-text files
ni_groupid = "4"

# In most cases, the first group/first sampled alter is inserted manually, then used as template for this script. That's way one usually starts by 2
start = 2
end = 8
# This was inserted because questions got reordered after import. However, this does not seem to have any effect and in most cases one needs to reorder
# questions after import manually anyway.
group_order = 23 # start value that is incremented

gid = "215"

preText1File = "./preText1NI-4.txt"
preText2File = "./preText2NI-4.txt"
postTextFile = "./postTextNI-4.txt"




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
    <qid><![CDATA[1807]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[N]]></type>
    <title><![CDATA[ni_languages_""" + str(i) + """]]></title>
    <question><![CDATA[Wie viele Fremdsprachen kann <b>{ng_""" + str(i) + """}</b> zumindest einigermaßen gut sprechen und verstehen?]]></question>
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
    <qid><![CDATA[1807]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[N]]></type>
    <title><![CDATA[ni_languages_""" + str(i) + """]]></title>
    <question><![CDATA[How many foreign languages does <b>{ng_""" + str(i) + """}</b> speak?]]></question>
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
    <qid><![CDATA[1808]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_innovations_""" + str(i) + """]]></title>
    <question><![CDATA[Welche der folgenden Neuerungen werden von <b>{ng_""" + str(i) + """}</b> genutzt? Kreuzen Sie diese auch an, falls <b>{ng_""" + str(i) + """}</b> ähnliche Neuerungen nutzt.]]></question>
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
    <qid><![CDATA[1808]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_innovations_""" + str(i) + """]]></title>
    <question><![CDATA[Which of the following innovations are used by <b>{ng_""" + str(i) + """}</b>? Mark also in case <b>{ng_""" + str(i) + """}</b> uses similar innovations.]]></question>
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
    <qid><![CDATA[1809]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_i_freq_""" + str(i) + """]]></title>
    <question><![CDATA[Wie häufig nutzt <b>{ng_""" + str(i) + """}</b> das Internet?]]></question>
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
    <qid><![CDATA[1809]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[L]]></type>
    <title><![CDATA[ni_i_freq_""" + str(i) + """]]></title>
    <question><![CDATA[How often does <b>{ng_""" + str(i) + """}</b> use the internet?]]></question>
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
    <qid><![CDATA[1810]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_i_purp_""" + str(i) + """]]></title>
    <question><![CDATA[Zu welchen Zwecken nutzt <b>{ng_""" + str(i) + """}</b> das Internet?]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[((ni_i_freq_""" + str(i) + """.NAOK != "A6"))]]></relevance>
   </row>
   <row>
    <qid><![CDATA[1810]]></qid>
    <parent_qid><![CDATA[0]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[""" + gid + """]]></gid>
    <type><![CDATA[M]]></type>
    <title><![CDATA[ni_i_purp_""" + str(i) + """]]></title>
    <question><![CDATA[For which purposes does <b>{ng_""" + str(i) + """}</b> use the internet?]]></question>
    <preg/>
    <help/>
    <other><![CDATA[N]]></other>
    <mandatory><![CDATA[Y]]></mandatory>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
    <relevance><![CDATA[((ni_i_freq_""" + str(i) + """.NAOK != "A6"))]]></relevance>
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
    <qid><![CDATA[1811]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ001]]></title>
    <question><![CDATA[Smartphone (Handy mit Computerfunktionen)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1812]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ001]]></title>
    <question><![CDATA[Soziale Netzwerke]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1812]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ001]]></title>
    <question><![CDATA[Online Social Networks]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1811]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ001]]></title>
    <question><![CDATA[Smartphone (Mobile phone with computer features)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[1]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1813]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ002]]></title>
    <question><![CDATA[Hybrid- od. Elektroauto]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[4813]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ002]]></title>
    <question><![CDATA[Reiseplanung]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1813]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ002]]></title>
    <question><![CDATA[Hybrid- or electric car]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[4813]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ002]]></title>
    <question><![CDATA[Journey Planning]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[2]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1815]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ003]]></title>
    <question><![CDATA[Carsharing (Gemeinschaftsauto)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[4814]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ003]]></title>
    <question><![CDATA[Software ausprobieren]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1815]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ003]]></title>
    <question><![CDATA[Carsharing]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[4814]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ003]]></title>
    <question><![CDATA[Try out new Software]]></question>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[3]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1817]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ004]]></title>
    <question><![CDATA[Photovoltaik oder Solarthermie]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[4]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1814]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ004]]></title>
    <question><![CDATA[Stellen-, Wohnungs- und/oder KFZ-Markt]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[4]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1817]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ004]]></title>
    <question><![CDATA[Photovoltaic or solar heat]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[4]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1814]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ004]]></title>
    <question><![CDATA[Job-, Housing- and/or Car-Markets]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[4]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1819]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ005]]></title>
    <question><![CDATA[Flachbild-Fernseher]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1816]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ005]]></title>
    <question><![CDATA[Emails lesen und senden]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1819]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ005]]></title>
    <question><![CDATA[Flat Screen TV]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1816]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ005]]></title>
    <question><![CDATA[Read and send Emails]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[5]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1820]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ006]]></title>
    <question><![CDATA[E-Book-Reader (Lesen elektronischer Bücher)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[6]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1818]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ006]]></title>
    <question><![CDATA[Auktionen und/oder Tauschbörsen (ebay, markt.de, usw.)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[6]]></question_order>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1820]]></qid>
    <parent_qid><![CDATA[1808]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ006]]></title>
    <question><![CDATA[E-Book-Reader]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[6]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
   <row>
    <qid><![CDATA[1818]]></qid>
    <parent_qid><![CDATA[1810]]></parent_qid>
    <sid><![CDATA[476335]]></sid>
    <gid><![CDATA[215]]></gid>
    <type><![CDATA[T]]></type>
    <title><![CDATA[SQ006]]></title>
    <question><![CDATA[Auctionen and/or markets (ebay, markt.de etc.)]]></question>
    <help/>
    <other><![CDATA[N]]></other>
    <question_order><![CDATA[6]]></question_order>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
    <same_default><![CDATA[0]]></same_default>
   </row>
  </rows>
 </subquestions>
 <answers>
  <fields>
   <fieldname>qid</fieldname>
   <fieldname>code</fieldname>
   <fieldname>answer</fieldname>
   <fieldname>sortorder</fieldname>
   <fieldname>assessment_value</fieldname>
   <fieldname>language</fieldname>
   <fieldname>scale_id</fieldname>
  </fields>
  <rows>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A1]]></code>
    <answer><![CDATA[sehr häufig (mehrmals täglich) <i>und</i> unterwegs]]></answer>
    <sortorder><![CDATA[1]]></sortorder>
    <assessment_value><![CDATA[0]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A1]]></code>
    <answer><![CDATA[very often (several times a day) <i>and</i> on the way]]></answer>
    <sortorder><![CDATA[1]]></sortorder>
    <assessment_value><![CDATA[0]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A2]]></code>
    <answer><![CDATA[sehr häufig (mehrmals täglich)]]></answer>
    <sortorder><![CDATA[2]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A2]]></code>
    <answer><![CDATA[very often (several times a day)]]></answer>
    <sortorder><![CDATA[2]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A3]]></code>
    <answer><![CDATA[häufig (täglich)]]></answer>
    <sortorder><![CDATA[3]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A3]]></code>
    <answer><![CDATA[frequently  (daily)]]></answer>
    <sortorder><![CDATA[3]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A4]]></code>
    <answer><![CDATA[oft (mind. 2x pro Woche)]]></answer>
    <sortorder><![CDATA[4]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A4]]></code>
    <answer><![CDATA[often (at least 2x a week)]]></answer>
    <sortorder><![CDATA[4]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A5]]></code>
    <answer><![CDATA[selten]]></answer>
    <sortorder><![CDATA[5]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A5]]></code>
    <answer><![CDATA[rarely]]></answer>
    <sortorder><![CDATA[5]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A6]]></code>
    <answer><![CDATA[nie]]></answer>
    <sortorder><![CDATA[6]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[de]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
   <row>
    <qid><![CDATA[1809]]></qid>
    <code><![CDATA[A6]]></code>
    <answer><![CDATA[never]]></answer>
    <sortorder><![CDATA[6]]></sortorder>
    <assessment_value><![CDATA[1]]></assessment_value>
    <language><![CDATA[en]]></language>
    <scale_id><![CDATA[0]]></scale_id>
   </row>
  </rows>
 </answers>
 <conditions>
  <fields>
   <fieldname>cid</fieldname>
   <fieldname>qid</fieldname>
   <fieldname>cqid</fieldname>
   <fieldname>cfieldname</fieldname>
   <fieldname>method</fieldname>
   <fieldname>value</fieldname>
   <fieldname>scenario</fieldname>
  </fields>
  <rows>
   <row>
    <cid><![CDATA[70]]></cid>
    <qid><![CDATA[65]]></qid>
    <cqid><![CDATA[64]]></cqid>
    <cfieldname><![CDATA[ni_i_freq_""" + str(i) + """.NAOK]]></cfieldname>
    <method><![CDATA[!=]]></method>
    <value><![CDATA[A6]]></value>
    <scenario><![CDATA[1]]></scenario>
   </row>
  </rows>
 </conditions>""")
   
    inputLine =  postfile.readline()
    while inputLine != "":
        outfile.write(inputLine)
        inputLine =  postfile.readline()   
    
    prefile1.close()
    prefile2.close()
    postfile.close()

    outfile.close()

print("Ready")