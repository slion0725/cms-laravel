import os
from string import Template

class TemplateToHtmlMakerClass():
    currentHtml = ''
    currentPara = []
    output = ''

    def __init__(self):
        self.getPara()
        self.loadFile()

    def loadFile(self):
        fileList = os.listdir('template')
        fileList = sorted(fileList)
        for item in fileList:
            self.getHtml(item)

    def getHtml(self, fileName):
        with open('template/' + fileName, 'r') as file:
            self.currentHtml = Template(file.read())
        self.putPara()


    def getPara(self):
        with open('columns_in.txt', 'r') as file:
            self.currentPara = file.read().split('\n')

    def putPara(self):
        for item in self.currentPara:
            para = item.split(',')
            self.output += self.currentHtml.substitute(id=para[0], name=para[1], validator='$validator') + '\n'
        
        self.output += '-' * 100 + '\n'
        self.saveFile()

    def saveFile(self):
        with open('columns_out.txt', 'w') as file:
            file.write(self.output)

tryit = TemplateToHtmlMakerClass()