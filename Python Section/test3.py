import mysql.connector as mysql
import os

# fetching data to verify uid
con = mysql.connect(host="localhost", user="root", password="", database="attendance_system")  # For connecting with mysql database
cursor = con.cursor()  # for executing any query
cursor.execute("select * from std_reg")
rows = cursor.fetchall()

with open('Attendance.csv', 'r+') as f:
    myDataList = f.readlines()
    new_list_1 = []  # separated by underscore

    absent_list = []
    present_list = []

    for list in myDataList:
        new_list_1.append(list.split("_"))
    # print(new_list_1[0][6])

    for i in range(0, len(new_list_1)):
        # print(new_list_1[i][0])
        for row in rows:
            # print(row)
            if new_list_1[i][3] == "7":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_7_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "8":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_8_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "9":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_9_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "10":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_10_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "11":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_11_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "12":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_12_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "13":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_13_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "14":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_14_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "15":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_15_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "16":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_16_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "17":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_17_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();

            elif new_list_1[i][3] == "18":
                if row[0] not in new_list_1[i][0]:
                    # print()
                    # print(row[0]+"_"+new_list_1[i][1]+"_"+new_list_1[i][2]+"_"+new_list_1[i][3]+"_"+new_list_1[i][4]+"_Absent"+"\n")
                    with open('Attendance.csv', 'a'):
                        f.writelines(
                            f'{row[0]}_{new_list_1[i][1]}_{new_list_1[i][2]}_18_{new_list_1[i][4]}_Absent\n')
                        f.close()

                        con.close();


# os.system('python test4.py')