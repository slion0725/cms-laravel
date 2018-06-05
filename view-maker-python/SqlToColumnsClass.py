import os
from string import Template

class SqlToColumnsClass():
    output = ''

    def __init__(self):
        self.getSql()

    def getSql(self):
        with open('db_in.sql', 'r') as file:
            sqlString = file.read()
        
        sqlList = sqlString.split('`')
        
        del(sqlList[::2])

        for item in sqlList:
            self.output += '\'{0}\',\n'.format(item)

        self.saveFile()

    def saveFile(self):
        with open('db_out.txt', 'w') as file:
            file.write(self.output)

tryit = SqlToColumnsClass()