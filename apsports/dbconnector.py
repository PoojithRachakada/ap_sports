import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  passwd="",
  database="sportslogin"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT names FROM details")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)