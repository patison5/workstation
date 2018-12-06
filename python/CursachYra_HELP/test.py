fr = open('text.txt')
import json

# fw = open('text2.txt', 'w')
# fw.write('HELLO PIDOR!\n')

def getJSON(filePathAndName):
    with open(filePathAndName, 'r') as json_data:
        return json.load(json_data)

class Book:
	def __init__(self, i, author, title, date, shellNumber):
		self.id = i
		self.title = title
		self.author = author
		self.date = date
		self.shellNumber = shellNumber


class Library:
	def __init__(self):
		self._books = []

	def addToList(self, item):
		self._books.append(item)

	def removeFromList(self, id):
		print(id)

	def get(self):
		return self._books

	def checkExistance(self, title):
		for el in self._books:
			if (title.split() == el.title.split()): #пока что костыль.., я бл не пойму откуда еще один символ берется
				return True
		return False

	def getBooksCountByAuthor (self, author):
		k = 0

		for el in self._books:
			if (author.split() == el.author.split()):
				k = k + 1

		return k


	def showBeautifulData(self):
		print("\n######################\n")
		for el in self._books:
			print("id:" , el.id)
			print("title:" , el.title)
			print("author:" , el.author)
			print("date:" , el.date)
			print("shellNumber:" , el.shellNumber)
			print("\n######################\n")

	def getLibraryDataFromFile(self):
		testJson = getJSON('books.json')

		for el in testJson:
			book = Book(el.get("id"), 	 el.get("author"),
						el.get("title"), el.get("date"),
						el.get("shellNumber"))

			lib.addToList(book)

	def deleteById (self, id):
		del self._books[id]

    def test ():
        println(1);

lib = Library()
lib.getLibraryDataFromFile()
# lib.showBeautifulData()



print("Введи, сука, данные!")
line = input()

flag = lib.checkEx(line)

if (flag):
	print("Книжка присутствует!")
else: print("Книжка отстутствует!!!!!!")

# интеррактивное общение через консоль


# lib.deleteById(0)

# print('deleting')


# lib.showBeautifulData()









































# ////////////////////////////////////////////////////////////////////////////////

command = 1
while command == "0":
	print("Введите '0', чтобы выйти\n" +
		  "Введите '1', чтобы добавить новую книжку\n" +
		  "Введите '2', чтобы удалить книжку\n" +
		  "Введите '3', чтобы показать все книжки\n" +
		  "Введите '4', чтобы проверить наличие книги\n" +
		  "Введите '5', чтобы узнать, сколько книг у данного автора\n")

	command = input()

	if (command == "4"):
		print("Введите название книги: ")
		name = input()

		if (lib.checkExistance(name)):
			print("Книжка присутствует!\n")
		else:
			print("Книжка отстутствует!\n")

	if (command == "5"):
		print("Введите автора: ")
		author = input()

		number = lib.getBooksCountByAuthor(author)

		if (number == 0):
			print("У " + author + " книжек нет!\n")
		else:
			print(lib.getBooksCountByAuthor(author), "\n")


	print("\nЗавершить работу программы? (y/no)")
	if (input() == "y"):
		break

# интеррактивное общение через консоль
