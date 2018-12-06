domains
	i = integer % целое число
	list = i* % список целых чисел
	bi_t = tree_b(bi_t, i, bi_t); nil % функтор бинарного дерева (из лекций)


predicates
	nondeterm go % главное меню программы
	nondeterm do(char) % запускает выполнение полученного на вход задания
	nondeterm readList(list) % вводит список от пользователя
	% предикаты для бинарных деревьев
	% выводит бинарное дерево (от левого края)
	nondeterm map(bi_t, i)
	% делает отступ слева (выводит на консоль табуляцию D раз)
	nondeterm tab(i)
	% создаёт бинарное дерево как бинарный справочник (вводит с консоли)
	nondeterm create_tree(bi_t, bi_t)
	% вставляет элемент в бинарный справочник
	nondeterm insert(i, bi_t, bi_t)
	% задание 83 - Указать уровень, на котором находится заданный элемнт.
	nondeterm task_83(bi_t, i, i)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 83\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :- % задание 83
		write("Enter tree: "), nl,
		create_tree(nil, Tree),
		write("Enter element: "), readint(El),
		write("Level: "), task_83(Tree, El, 0), nl.  


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


	% бинарное дерево
	% выводим дерево на консоль (предикат из лекций)
	map(nil, _).
	map(tree_b(Left, E, Right), D) :-
		NewD = D + 1,
		map(Right, NewD),
		tab(D), write(E), nl,
		map(Left, NewD).
	
	% делаем D отступов  (из лекций)
	tab(0).
	tab(D) :-
		write("\t"),
		NewD = D - 1,
		tab(NewD).

	% созадём дерево (из лекций)
	create_tree(Tree, NewTree) :-
		readint(C),!,
		insert(C, Tree, TempTree),
		nl, map(TempTree, 0),
		write("----------------------------------------------------------------------"), nl,
		create_tree(TempTree, NewTree). 
	
	create_tree(Tree, Tree).
	
	% вставляем элемент в дерево  (из лекций)
	insert(New, nil, tree_b(nil, New, nil)).
	insert(E, tree_b(Left, E, Right), tree_b(Left, E, Right)).
	
	insert(New, tree_b(Left, E, Right), tree_b(NewLeft, E, Right)) :-
		New < E,
		insert(New, Left, NewLeft).
		
	insert(New, tree_b(Left, E, Right), tree_b(Left, E, NewRight)) :-
		E < New,
		insert(New, Right, NewRight).


	% задание 83 - Указать уровень, на котором находится заданный элемнт.
	% При переходе с уровня на уровень увеличиваем Level на 1, и когда встретится элемент,
	% равный искомому, то выводим текущий Level
	task_83(nil, _, _).
	task_83(tree_b(_, El, _), El, Lvl) :- write(Lvl).
	task_83(tree_b(nil, _, nil), _, _).
	task_83(tree_b(Left, _, Right), El, Level) :-
		Next = Level + 1,
		task_83(Right, El, Next),
		task_83(Left, El, Next).




goal go.

