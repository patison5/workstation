package kursovayz_3.sem;

public class Chess {
    private static final int WORLD_X = 3;
    private static final int WORLD_Y = 3;

    Console console = new Console();

    private String boxValue = "";
    private int corX = 0;
    private int corY = 0;

    String[][] Matrix = {
          {"\u2655","\u2655","\u2655"},
          {"","",""},
          {"\u265f","\u265f","\u265f"}
    };

    public void renderTable (javax.swing.JTable hourses__table) {
      // идем слева направо
      for (int i = 0; i < WORLD_X; i++) {

        // идем сверху вниз
        for (int j = 0; j < WORLD_Y; j++) {
            hourses__table.setValueAt(Matrix[i][j], i, j);
//            System.out.print("(" + i + "," + j + ") ");
              System.out.print(Matrix[i][j] +  " ");
        }

        System.out.println("\n");
      }
    }

    public void checkMove (javax.swing.JTable hourses__table, int x, int y, String value) {
      if (boxValue == "") {
        boxValue = value;
        corX = x;
        corY = y;
      } else {
        int modX = Math.abs(corX - x);
        int modY = Math.abs(corY - y);

        if (((modX == 1) && (modY == 2)) || ((modX == 2) && (modY == 1))) {
          if (value.length() == 0) {
            console.log("Оо красавчик, нашел таки пустую клетку!");
            setValue(hourses__table, x, y, value);
          } else {
            console.log("Че слепой, что-ли?!? Клетка занята, выбирай другую!");
          }
        } else {
          console.log("Неверный ход, чекай справочник!");
        }

        if (checkEnd(hourses__table)) {
          console.log("Игра закончена, всем спасибо!");
        }

        boxValue = "";
        corX = 0;
        corY = 0;
      }
    }

    private boolean checkEnd (javax.swing.JTable hourses__table) {
      boolean flag = true;

      for (int i = 0; i < WORLD_X; i++) {
        for (int j = 0; j < WORLD_Y; j++) {
          if (Matrix[i][j] != get(hourses__table, i,j)) {
            flag = false;
            break;
          }
        }
        if (!flag) break;
      }

      return flag;
    }

    private String get (javax.swing.JTable hourses__table, int x, int y) {
      String value = ""+hourses__table.getValueAt(x,y);
      return "string";
    }

    private void setValue (javax.swing.JTable hourses__table, int x, int y, String value) {
      hourses__table.setValueAt(value, x,y);
      Matrix[x][y] = boxValue;
      System.out.println("value: " + boxValue);
      Matrix[corX][corY] = "";

      console.log("bum");
    }

}
