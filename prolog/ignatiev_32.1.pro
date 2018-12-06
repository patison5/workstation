domains
	i = integer % целое число
	list = i* % список целых чисел


predicates
	nondeterm go 
	nondeterm do(char)
	nondeterm readList(list)
	nondeterm add_end(i, list, list)
   
    nondeterm task_32(list, i, list, list)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 32.1\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :- 
        write("List 1: "), nl, readList(L1),
        write("List 2: "), nl, readList(L2),
        write("List 1: ", L1), nl,
        write("List 2: ", L2), nl,
        S = 0, 
        task_32(L1, S, [], R1),
        task_32(L2, S, R1, R2),
        write("Result list: ", R2), nl.


	do('0') :-
		write("Good bye!"), nl,
		exit.

	readList([H|T]) :-
		write("Add element: "),
		readint(H), 
		readList(T). 
	
	readList([]).


	add_end(X, [H|T], [H|Tf]) :- add_end(X, T, Tf).
	add_end(X, [], [X]).


    task_32([], _, Res, Res).
    
    task_32([H|T], ElementNumber, Temp, Res) :-
        ElementNumber mod 2 = 0,
        NextElement = ElementNumber + 1,
        add_end(H, Temp, NewTemp),
        task_32(T, NextElement, NewTemp, Res).
        
    task_32([_|T], ElementNumber, Temp, Res) :-
        NextElement = ElementNumber + 1,
        task_32(T, NextElement, Temp, Res).

goal go.

