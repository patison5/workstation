domains
	i = integer
	list = i*
	sorting = up;down;not_sorted


predicates
	nondeterm go
	nondeterm do(char)
	nondeterm readList(list)

	nondeterm task_61_checkSorting(list, sorting)

	nondeterm task_61_sortedUp(list, sorting)

	nondeterm task_61_sortedDown(list, sorting)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 61\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :-
		write("List: "), nl,
		readList(L), nl,
		write("List: ", L), nl,
		task_61_checkSorting(L, Type),
		write("Sort Type: ", Type), nl.


	do('0') :-
		write("Good bye!"), nl,
		exit.


	readList([H|T]) :-
		write("Add element: "),
		readint(H),
		readList(T).
	

	readList([]).





	task_61_checkSorting(L, Type) :-
		task_61_sortedUp(L, T),
		T = not_sorted,
		task_61_sortedDown(L, Type).
		

	task_61_checkSorting(_, up).




	task_61_sortedDown([], down).
	task_61_sortedDown([_], down).
	task_61_sortedDown([H1|[H2| _]], not_sorted) :- H1 < H2.
	task_61_sortedDown([_|T], S) :- task_61_sortedDown(T, S).
	


	task_61_sortedUp([], up).
	task_61_sortedUp([_], up).
	task_61_sortedUp([H1|[H2| _]], not_sorted) :- H1 > H2.
	task_61_sortedUp([_|T], S) :- task_61_sortedUp(T, S).




goal go.

