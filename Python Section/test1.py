# importing required library
import mysql.connector
import urllib.request
import random
import os

# connecting to the database
dataBase = mysql.connector.connect(host="localhost", user="root", passwd="", database="attendance_system")


def download_image(url, name_std):
    name = name_std #name of student
    fullname = "E:\\pythonProject\\images\\"+str(name)+".jpg"
    urllib.request.urlretrieve(url,fullname)

# preparing a cursor object
cursorObject = dataBase.cursor()
# selecting query
query = "SELECT * from std__face_reg"
cursorObject.execute(query)
myresult = cursorObject.fetchall()

for x,y in myresult:
    tuple_img = "".join(y)
    img = tuple_img

    tuple_name = "".join(x)
    name = tuple_name

    download_image(img,name)


# disconnecting from server
dataBase.close()


# os.system('python test2.py')