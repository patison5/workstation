package kursovayz_3.sem;

public class TicTacToe {

	Console console = new Console();

	private static final int WORLD_X = 3;
  	private static final int WORLD_Y = 3;

  	private static final String playerMark = "X";
  	private static final String computMark = "O";

  	public boolean _isGameEnd = false;
  	public String Winner = "";

    private String[][] Matrix = {
		{"","",""},
		{"","",""},
		{"","",""}
	};

	public void makeMove (int x, int y) {
		String value = get(x, y);

		if (value.length() != 0) {
			console.log("Поле уже занято, выбери другое!");
		} else {
			Matrix[x][y] = playerMark;
			BotMove();

			if (_isGameEnd) {
				console.log("Игра закончена!");
			}
		}
	}

	private void BotMove() {
		boolean flag = true;

		while (flag) {
			if (checkEnd()) break; //если игра закончилась - выходим из цикла

			// тут нужно проверить ДИАПАЗОН, я рандом не юзал в java
			int randomX = 0 + (int) (Math.random() * 2); 
			int randomY = 0 + (int) (Math.random() * 2);

			if (Matrix[randomX][randomY].length() == 0) {
				Matrix[randomX][randomY] = computMark;
				flag = false;
			}
		}
	}

	private boolean checkEnd() {
	    boolean flag = true;  //игра закончена

		for (int i = 0; i < WORLD_X; i++) {
			for (int j = 0; j < WORLD_Y; j++) {
				if (Matrix[i][j].length() == 0) {
					flag = false;
					_isGameEnd = true;
					break;
				}
			}

			if (!flag) break;
		}

		for (int i = 0; i < WORLD_X; i++) {
			if ((Matrix[i][0] == Matrix[i][1]) && (Matrix[i][0] == Matrix[i][2])) {
				_isGameEnd = true;
				flag = false;
				break;
			}
			if ((Matrix[0][i] == Matrix[1][i]) && (Matrix[0][i] == Matrix[2][i])) {
				_isGameEnd = true;
				flag = false;
				break;
			}

			if ((Matrix[i][i] == Matrix[i+1][i+1]) && (Matrix[i][i] == Matrix[i+2][i+2])) {
				_isGameEnd = true;
				flag = false;
				break;
			}
		}

		return flag;
	}

	private void renderTable() {
		for (int i = 0; i < WORLD_X; i++) {
			for (int j = 0; j < WORLD_Y; j++) {
				console.log(Matrix[i][j]);
			}
		}
	}

	private String get (int x, int y) {
		return "Value";
	}
}
