domains
	i = integer % целое число
	list = i* % список целых чисел


predicates
	nondeterm go % главное меню программы
	nondeterm do(char) % запускает выполнение полученного на вход задания
	nondeterm readList(list) % вводит список от пользователя
	% считает количество вхождений элемента в список
	nondeterm elementCount(list, i, i)
	% задание 48 - Получить список элементов, которые встречаются в исходном списке ровно один раз.
	nondeterm task_48(list, list, list)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 48\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :- % задание 48
		write("LIST: "), nl, readList(L),
		write("LIST: ", L), nl,
		task_48(L, L, R),
		write("RESULT: ", R), nl.


	do('0') :-
		write("Good bye!"), nl,
		exit.

	% ввод списка от пользователя
	readList([H|T]) :-
		write("Add element: "),
		readint(H), % читаем число и помещаем его в голову
		readList(T). % запускаем себя для хвоста
	
	% если введено не число – прекращаем рекурсию, возвращаем пустой список
	readList([]).


	% подсчитываем количество вхождений элемента в список
	% идёт по списку и сравнивает каждый элемент с искомым, если они равны, то
	% количество вхождений элемента равно 1 + количество вхождений элемента в хвост списка
	elementCount([], _, 0).
	
	elementCount([H|T], El, Res) :-
		H = El,
		elementCount(T, El, NewRes),
		Res = NewRes + 1, !.
	
	elementCount([_|T], El, Res) :-
		elementCount(T, El, Res).


	% задание 48 - Получить список элементов, которые встречаются в исходном списке ровно один раз.
	% идём по списку и при помощи предиката elementCount() считаем сколько раз элемент встречается в 
	% исходном списке, если 1 раза, то добавляем его в конечный список
	task_48(_, [], []).
	task_48(L, [H|T], [H|RT]) :- elementCount(L, H, C), C = 1, task_48(L, T, RT).
	task_48(L, [_|T], R) :- task_48(L, T, R).




goal go.

