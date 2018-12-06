package kursovayz_3.sem;
import java.util.Scanner;

public class CowsAndBows {

	Console console = new Console();
	Scanner in = new Scanner(System.in);

	private static final int currentNumber = 0;
	private static final int _SIZE = 4;
	private static boolean _isGameEnd = false;

	private static final int randomX = 1 + (int) (Math.random() * 10); 
	private static final int randomY = 1 + (int) (Math.random() * 10);
	private static final int randomZ = 1 + (int) (Math.random() * 10);
	private static final int randomK = 1 + (int) (Math.random() * 10);

    private int[] mass = {
    	randomX, 
    	randomY, 
    	randomZ, 
    	randomK
    };


    // это для отладки)
    private int[] table = { 0,0,0,0 };

    private void showNumber () {
    	console.log(mass);
    }

    // это временно, тоже для отладки)
    public void startGame () {
    	showNumber();

    	while (!_isGameEnd) {
    		int number = in.nextInt();
    		int pos = in.nextInt();
    		table[pos] = number;

    		setNumber(number, pos);
    	}
    }

    public void setNumber(int number, int pos) {
    	if (number == mass[pos]) {
    		console.log("Б"); //заменить на вывод в table[pos] res..
    	} else {

    		for (int i = 0; i < _SIZE; i++) {
    			if (number == mass[i]) {
    				console.log("K"); //заменить на вывод в table[pos] res..
    				break;
    			}
    		}
    	}

    	checkEnd();
    	if (_isGameEnd)
    		console.log("Конец игры!"); //вывести окошко с сообщением...
    }

    private void checkEnd () {
    	boolean flag = true;

    	for (int i = 0; i < _SIZE; i++) {
    		if (mass[i] != table[i]) {
    			flag = false;
    			break;
    		}
    	}

    	_isGameEnd = flag;
    }
}
