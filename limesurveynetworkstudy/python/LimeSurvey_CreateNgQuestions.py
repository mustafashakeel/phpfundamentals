'''
Created on 15.10.2012

Creates .lsg files for name generator questions
that can be imported into LimeSurvey.

@author: Sascha Holzhauer
'''


ng_name = "aquaint"
# important for validation equation, eg.:
ng_groupNum = 4
ng_groupid = "999"

# In most cases, the first question is inserted manually, then used as template for this script. That's way one usually starts by 2
start_question = 2
end_question = 25

totalNumGeneratorFields = 25

preTextFile = "./preText_NG.txt"
postTextFile = "./postText_NG.txt"

outputFile = "./questions_ng_" + ng_name + "_" + str(start_question) + "_" + str(end_question) + ".lsq"


prefile = open(preTextFile, 'r')
postfile = open(postTextFile, 'r')

outfile = open(outputFile, 'w')


inputLine =  prefile.readline()

# Copy Pre-Text file
while inputLine != "":
    outfile.write(inputLine)
    inputLine =  prefile.readline()
     
# create question rows:
for i in range(start_question, end_question + 1):
    # German
    outfile.write("<row>\n")
    outfile.write("<qid><![CDATA[" + str(i) + "]]></qid>\n")
    outfile.write("<parent_qid><![CDATA[0]]></parent_qid>\n")
    outfile.write("<sid><![CDATA[476335]]></sid>\n")
    outfile.write("<gid><![CDATA[" + ng_groupid + "]]></gid>\n")
    outfile.write("<type><![CDATA[S]]></type>\n")
    outfile.write("<title><![CDATA[ng_" + ng_name + "_" + str(i) + "]]></title>\n")
    outfile.write("<question/>\n")
    outfile.write("<preg/>\n")
    outfile.write("<help/>\n")
    outfile.write("<other><![CDATA[N]]></other>\n")
    outfile.write("<mandatory><![CDATA[N]]></mandatory>\n")
    outfile.write("<question_order><![CDATA[" + str(i) + "]]></question_order>\n")
    outfile.write("<language><![CDATA[de]]></language>\n")
    outfile.write("<scale_id><![CDATA[0]]></scale_id>\n")
    outfile.write("<same_default><![CDATA[0]]></same_default>\n")
    relevanceText = ''
    for j in range(1, totalNumGeneratorFields + 1):
        relevanceText = relevanceText + ", ng_" + ng_name + "_" + str(j)
    outfile.write("<relevance><![CDATA[checkNG(" + str(i) + relevanceText + ")]]></relevance>\n")
    outfile.write("</row>\n")
    
    # English
    outfile.write("<row>\n")
    outfile.write("<qid><![CDATA[" + str(i) + "]]></qid>\n")
    outfile.write("<parent_qid><![CDATA[0]]></parent_qid>\n")
    outfile.write("<sid><![CDATA[476335]]></sid>\n")
    outfile.write("<gid><![CDATA[" + ng_groupid + "]]></gid>\n")
    outfile.write("<type><![CDATA[S]]></type>\n")
    outfile.write("<title><![CDATA[ng_" + ng_name + "_" + str(i) + "]]></title>\n")
    outfile.write("<question/>\n")
    outfile.write("<preg/>\n")
    outfile.write("<help/>\n")
    outfile.write("<other><![CDATA[N]]></other>\n")
    outfile.write("<mandatory><![CDATA[N]]></mandatory>\n")
    outfile.write("<question_order><![CDATA[" + str(i) + "]]></question_order>\n")
    outfile.write("<language><![CDATA[en]]></language>\n")
    outfile.write("<scale_id><![CDATA[0]]></scale_id>\n")
    outfile.write("<same_default><![CDATA[0]]></same_default>\n")
    relevanceText = ''
    for j in range(1, totalNumGeneratorFields + 1):
        relevanceText = relevanceText + ", ng_" + ng_name + "_" + str(j)
    outfile.write("<relevance><![CDATA[checkNG(" + str(i) + relevanceText + ")]]></relevance>\n")
    outfile.write("</row>\n")
    
    
outfile.write('''  </rows>
 </questions>
 <question_attributes>
  <fields>
   <fieldname>qid</fieldname>
   <fieldname>attribute</fieldname>
   <fieldname>value</fieldname>
   <fieldname>language</fieldname>
  </fields>
  <rows>''')
  
# Output attributes
for i in range(start_question, end_question + 1):
    # generate validation equation:
    valiText = ""
    for g in {"family", "friends", "neighbours", "aquain"}:
        for j in range(1, totalNumGeneratorFields + 1):
            valiText = valiText  + ", " + "ng_" + g + "_" + str(j)
        
    outfile.write('''<row>
    <qid><![CDATA[''' + str(i) + ''']]></qid>
    <attribute><![CDATA[em_validation_q]]></attribute>
    <value><![CDATA[(uniqueToFirst(''' + str(ng_groupNum) + ", " + str(i) + valiText + '''))]]></value>
   </row>
   <row>
    <qid><![CDATA[''' + str(i) + ''']]></qid>
    <attribute><![CDATA[em_validation_q_tip]]></attribute>
    <value><![CDATA[Geben Sie nicht den gleiche Namen mehrfach ein - nutzen Sie Nachnamen oder einen Ersatzbegriff!]]></value>
   </row>
   <row>
    <qid><![CDATA[''' + str(i) + ''']]></qid>
    <attribute><![CDATA[maximum_chars]]></attribute>
    <value><![CDATA[40]]></value>
   </row>''')
    
# copy Post-Text file:
inputLine =  postfile.readline()
while inputLine != "":
    outfile.write(inputLine)
    inputLine =  postfile.readline()   

prefile.close()
postfile.close()
outfile.close()

print("Ready")