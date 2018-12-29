domains
	i = integer
	list = i*


predicates
	nondeterm go
	nondeterm do(char)
	nondeterm readList(list)

	nondeterm task_38(list, i, list, list)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 38\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :-
		write("LIST: "), nl, readList(L), nl,
		write("LIST: ", L), nl,
		write("COUNT: "), readint(C),
		task_38(L, C, R1, R2),
		write("LIST 1: ", R1), nl,
		write("LIST 2: ", R2), nl.


	do('0') :-
		write("Good bye!"), nl,
		exit.


	readList([H|T]) :-
		write("Add element: "),
		readint(H),
		readList(T).
	

	readList([]).





	task_38([], _, [], []). 
	task_38([H|T], 0, R1, [H|RT]) :- task_38(T, 0, R1, RT).
	task_38([H|T], C, [H|RT], R2) :- NC = C - 1, task_38(T, NC, RT, R2).




goal go.

