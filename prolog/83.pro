domains
	i = integer
	list = i*
	bi_t = tree_b(bi_t, i, bi_t); nil


predicates
	nondeterm go
	nondeterm do(char)
	nondeterm readList(list)


	nondeterm map(bi_t, i)

	nondeterm tab(i)

	nondeterm create_tree(bi_t, bi_t)

	nondeterm insert(i, bi_t, bi_t)

	nondeterm task_83(bi_t, i, i)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 83\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :-
		write("Enter tree: "), nl,
		create_tree(nil, Tree),
		write("Enter element: "), readint(El),
		write("Level: "), task_83(Tree, El, 0), nl.  


	do('0') :-
		write("Good bye!"), nl,
		exit.


	readList([H|T]) :-
		write("Add element: "),
		readint(H),
		readList(T).
	

	readList([]).




	map(nil, _).
	map(tree_b(Left, E, Right), D) :-
		NewD = D + 1,
		map(Right, NewD),
		tab(D), write(E), nl,
		map(Left, NewD).
	

	tab(0).
	tab(D) :-
		write("\t"),
		NewD = D - 1,
		tab(NewD).


	create_tree(Tree, NewTree) :-
		readint(C),!,
		insert(C, Tree, TempTree),
		nl, map(TempTree, 0),
		write("----------------------------------------------------------------------"), nl,
		create_tree(TempTree, NewTree). 
	
	create_tree(Tree, Tree).
	

	insert(New, nil, tree_b(nil, New, nil)).
	insert(E, tree_b(Left, E, Right), tree_b(Left, E, Right)).
	
	insert(New, tree_b(Left, E, Right), tree_b(NewLeft, E, Right)) :-
		New < E,
		insert(New, Left, NewLeft).
		
	insert(New, tree_b(Left, E, Right), tree_b(Left, E, NewRight)) :-
		E < New,
		insert(New, Right, NewRight).





	task_83(nil, _, _).
	task_83(tree_b(_, El, _), El, Lvl) :- write(Lvl).
	task_83(tree_b(nil, _, nil), _, _).
	task_83(tree_b(Left, _, Right), El, Level) :-
		Next = Level + 1,
		task_83(Right, El, Next),
		task_83(Left, El, Next).




goal go.
