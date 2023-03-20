import mysql.connector as mysql

# fetching data to verify uid
con = mysql.connect(host="localhost", user="root", password="", database="attendance_system")  # For connecting with mysql database
cursor = con.cursor()  # for executing any query
cursor.execute("select * from std_reg")
rows = cursor.fetchall()

with open('Attendance.csv', 'r+') as f:
    myDataList = f.readlines()
    new_list_1 = []  # separated by underscore
    for list in myDataList:
        new_list_1.append(list.split("_"))

    for cont in range(0, len(new_list_1)):
        for row in rows:
            print(row[0])
            print(row[1])
            print(row[2])
            print(row[3])
            print(row[4])
            print(row[5])
            if  row[0] == new_list_1[cont][0]:
                # print("UID matched")
                # if  row[2] == new_list_1[cont][1]:
                    # print("class matched")
                    # if  row[3] == new_list_1[cont][2]:
                        # print("Div matched"+"\n")

                        # insert atd
                        con1 = mysql.connect(host="localhost", user="root", password="",
                                             database="attendance_system")  # For connecting with mysql database
                        cursor1 = con1.cursor()  # for executing any query

                        cursor1.execute(
                            "insert into attendance values('" + new_list_1[cont][0] + "', '" + new_list_1[cont][
                                1] + "', '" + new_list_1[cont][
                                2] + "', '" + new_list_1[cont][3] + "', '" + new_list_1[cont][4] + "', '" + new_list_1[cont][5] + "')")
                        cursor1.execute("commit");
                        print("Attendance Uploaded Successfully")
                        con.close();


