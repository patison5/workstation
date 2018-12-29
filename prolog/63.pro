domains
	i = integer
	list = i*
	tokenType = number;operation
	tokenTypes = tokenType*


predicates
	nondeterm go
	nondeterm do(char)
	nondeterm readList(list)

	nondeterm readFormula(list, tokenTypes)

	nondeterm saveToFormula(list, tokenTypes, char)

	nondeterm printFormula(list, tokenTypes)

	nondeterm task_63(list, tokenTypes, list, i)


	nondeterm op_or(i,i,i)
	nondeterm op_and(i,i,i)
	nondeterm op_xor(i,i,i)


clauses
	go :-
		write("=== SELECT TASK ===\n"),
		write("Press 1 - task 63\n"),
		write("Press 0 - to exit\n\n"),
		write("Task: "), readchar(A),
		write(A), nl, do(A),
		go.

	do('1') :-
		write("Enter formula: "), nl,
		readFormula(FORMULA, TYPES), nl,
		write("Formula: "), printFormula(FORMULA, TYPES), nl,
		write("Types: "), write(TYPES), nl,
		task_63(FORMULA, TYPES, [], R),
		write("Result: ", R), nl.


	do('0') :-
		write("Good bye!"), nl,
		exit.


	readList([H|T]) :-
		write("Add element: "),
		readint(H),
		readList(T).
	

	readList([]).




	readFormula(NUMS, TYPES) :-
		write("Token type [n]umber/[o]peration/[Esc]-stop: "),
		readchar(C),
		C <> 27,
		saveToFormula(NUMS, TYPES, C).
	
	readFormula([], []).
	



	saveToFormula([NH|NT], [number|TT], 'n') :- write("N: "), readint(NH), readFormula(NT, TT).
	saveToFormula([NH|NT], [operation|TT], 'o') :- write("O: "), readchar(NH), writef("%c", NH), nl, readFormula(NT, TT).




	printFormula([], []).
	printFormula([TOKEN|TOKENS], [number|TYPES]) :- write(TOKEN, ", "), printFormula(TOKENS, TYPES).
	printFormula([TOKEN|TOKENS], [operation|TYPES]) :- writef("%c", TOKEN), write(", "), printFormula(TOKENS, TYPES).










	task_63([NH|NT], [number|TT], STACK, R) :- task_63(NT, TT, [NH|STACK], R).
	task_63(['&'|NT], [operation|TT], [O2,O1|ST_T], R) :- op_and(O1,  O2, OpRes), task_63(NT, TT, [OpRes|ST_T], R).
	task_63(['|'|NT], [operation|TT], [O2,O1|ST_T], R) :- op_or(O1,  O2, OpRes), task_63(NT, TT, [OpRes|ST_T], R).
	task_63(['^'|NT], [operation|TT], [O2,O1|ST_T], R) :- op_xor(O1,  O2, OpRes), task_63(NT, TT, [OpRes|ST_T], R).
	task_63([], [], [R], R).


	op_and(0, 0, 0).
	op_and(_, 0, 0).
	op_and(0, _, 0).
	op_and(_, _, 1).
	
	op_or(0, 0, 0).
	op_or(_, _, 1).

	op_xor(0, 0, 0).
	op_xor(_, 0, 1).
	op_xor(0, _, 1).
	op_xor(_, _, 0).
	




goal go.

