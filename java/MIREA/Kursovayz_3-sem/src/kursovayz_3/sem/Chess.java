/**
 *
 * @author Lulex.py
 * 
 */

package kursovayz_3.sem;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableCellRenderer;

public class Chess {
    private static final int WORLD_X = 3;
    private static final int WORLD_Y = 3;
    private int STEP = 0;

    private String boxValue = "";
    private int corX = 0;
    private int corY = 0;

    String[][] Matrix = {
          {"\u2655","\u2655","\u2655"},
          {"","",""},
          {"\u265A","\u265A","\u265A"}
    };
    
    String[][] Matrix2 = {
          {"\u265A","\u265A","\u265A"},
          {"","",""},
          {"\u2655","\u2655","\u2655"}
    };

    public void renderTable (javax.swing.JTable hourses__table) {
      // идем слева направо
      for (int i = 0; i < WORLD_X; i++) {

        // идем сверху вниз
        for (int j = 0; j < WORLD_Y; j++) {
            hourses__table.setValueAt(Matrix[i][j], i, j);
            DefaultTableCellRenderer centerRenderer = new DefaultTableCellRenderer();
            centerRenderer.setHorizontalAlignment( JLabel.CENTER );
//            hourses__table.setDefaultRenderer(String.class, centerRenderer);
            hourses__table.getColumnModel().getColumn(i).setCellRenderer( centerRenderer );
        }
      }
    }

    public void checkMove (javax.swing.JTable hourses__table, javax.swing.JTable stepTable, int x, int y, String value) {
      if (boxValue == "") {
        boxValue = value;
        corX = x;
        corY = y;
      } else {
        int modX = Math.abs(corX - x);
        int modY = Math.abs(corY - y);
        
        if (boxValue == "\u2655") {
            if ((((modX >= 1) && (modY == 0)) || ((modX == 0) && (modY >= 1))) || (modX == modY)) {
                if (value.length() == 0) {
                    System.out.println("Ходит ферзь");
                    
                    boolean fl = true;

                    int k1 = corX - x;
                    int k2 = corY - y;
                    
                    // диагонали:
                    if ((Math.abs(k1) == Math.abs(k2)) && (k1 > 0 && k2 > 0)) {
                        System.out.println("по диагонали влево вверх");
                        if (Matrix[corX-1][corY-1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 < 0 && k2 > 0)) {
                        System.out.println("по диагонали влево вниз");
                        if (Matrix[corX+1][corY-1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 < 0 && k2 < 0)) {
                        System.out.println("по диагонали вправо вниз");
                        if (Matrix[corX+1][corY+1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((Math.abs(k1) == Math.abs(k2)) && (k1 > 0 && k2 < 0)) {
                        System.out.println("по диагонали вправо вверх");
                        if (Matrix[corX-1][corY+1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((k1 > 0) && (k2 == 0)) {
                        System.out.println("по вертикали вверх");
                        if (Matrix[corX-1][corY].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((k1 < 0) && (k2 == 0)) {
                        System.out.println("по вертикали вниз");
                        if (Matrix[corX+1][corY].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((k1 == 0) && (k2 > 0)) {
                        System.out.println("по горизонтали влево");
                        if (Matrix[corX][corY-1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    } else if ((k1 == 0) && (k2 < 0)) {
                        System.out.println("по горизонтали вправо");
                        if (Matrix[corX][corY+1].length() == 0) {
                            setValue(hourses__table, x, y, value, stepTable);
                        } else {
                            System.out.println("На пути стоит клетка!");
                        }
                    }
                } else {
                    System.out.println("Клетка занята!");
                }
            } else {
                System.out.println("Ферзь так не ходит!");
            }
        } else {
            if ((modX <= 1) && (modY <= 1)) {
                if (value.length() == 0) {
                    System.out.println("Ходит Король");
                    setValue(hourses__table, x, y, value, stepTable);
                } else {
                    System.out.println("Клетка занята!");
                }
            } else {
                System.out.println("Король так не ходит!");
            }
        }
        
        renderTable(hourses__table);

        if (checkEnd(hourses__table)) {
          System.out.println("Игра закончена, всем спасибо!");
          JOptionPane.showMessageDialog(null, "Игра закончена!", "Вы молодец!", 1);
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
          if (Matrix2[i][j] != get(hourses__table, i,j)) {
            flag = false;
            break;
          }
        }

        if (!flag) break;
      }

      return flag;
    }

    private String get (javax.swing.JTable hourses__table, int x, int y) {
      return (String)hourses__table.getValueAt(x,y);
    }

    private void setValue (javax.swing.JTable hourses__table, int x, int y, String value, javax.swing.JTable stepTable) {
      hourses__table.setValueAt(value, x,y);
      
      stepTable.setValueAt(boxValue,STEP,0);
      stepTable.setValueAt((corY == 0) ? "A"+corX : (corY == 1) ? "B" + corX : "C" + corX,STEP,1);
      stepTable.setValueAt((y == 0) ? "A"+x : (y == 1) ? "B" + x : "C" + x,STEP,2);
      STEP = STEP + 1;
      
      Matrix[x][y] = boxValue;
      Matrix[corX][corY] = "";
    }

}
