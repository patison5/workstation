/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package kursovayz_3.sem;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.table.DefaultTableCellRenderer;

/**
 *
 * @author Lulex.py
 * 
 */

public class SecondGame {
    private static final int _NUM = 3;
    private static final int _ROW = 3;
    private int VARIANT;
    
    private static final int[][][] _MATRIX = {
        {
          {4,9,2},
          {3,5,7},
          {8,1,6}
        },
        {
          {8,3,4},
          {1,5,9},
          {6,7,2}
        },
        {
          {6,1,8},
          {7,5,3},
          {2,9,4}
        },
        {
          {2,7,6},
          {9,5,1},
          {4,3,8}
        },
        {
          {8,1,6},
          {3,5,7},
          {4,9,2}
        },
        {
          {6,7,2},
          {1,5,9},
          {8,3,4}
        },
        {
          {2,9,4},
          {7,5,3},
          {6,1,8}
        },
        {
          {4,3,8},
          {9,5,1},
          {2,7,6}
        }
    };
    
    
    
    public void startGame (javax.swing.JTable SecondGame_table) {
        DefaultTableCellRenderer centerRenderer = new DefaultTableCellRenderer();
        centerRenderer.setHorizontalAlignment( JLabel.CENTER );
        SecondGame_table.setDefaultRenderer(String.class, centerRenderer);

        // предварительное очищение таблицы
        for (int i = 0; i < _NUM; i++)
            for (int j = 0; j < _ROW; j++)
                SecondGame_table.setValueAt("", i, j);
       
        int k = 2 + (int) (Math.random() * 8);
        int v = (int) (Math.random() * 8);
        
        VARIANT = v;
        
        for (int i = 0; i < k; i++) {
            int randomPosX = (int) (Math.random() * 3);
            int randomPosY = (int) (Math.random() * 3);
            
            SecondGame_table.setValueAt(_MATRIX[v][randomPosX][randomPosY], randomPosX, randomPosY);
        }
        
        // отладочная информация..
        System.out.println("Вариант матрицы: " + v);
        for (int i = 0; i < _NUM; i++) {
            for (int j = 0; j < _ROW; j++)
                System.out.print(_MATRIX[v][i][j] + " ");
            System.out.println("");
        }
    }
    
    public boolean checkSame (javax.swing.JTable SecondGame_table, String value, int x, int y) {
        for (int i = 0; i < _NUM; i++) {
            for (int j = 0; j < _ROW; j++){
                if ((SecondGame_table.getValueAt(i, j).toString() == value))
                    System.out.println(value + " " + SecondGame_table.getValueAt(i, j).toString() + " \nX: " + x + " Y: " + y + " I: " + i + " J: " + j);
                
                if (SecondGame_table.getValueAt(i, j).toString().equals(value) && ((x != i) || (y != j))) {
                    return true;
                }   
            }
        }
        return false;
    }
    
    public void checkTable(javax.swing.JTable SecondGame_table) {
        boolean flag = true;
        boolean allCellsAreFilled = true;
        
        int _dig1 = 0;
        int _dig2 = 0;
        
        for (int i = 0; i < _NUM; i++) {
            //проверка на любую пустую ячейку
            if ((SecondGame_table.getValueAt(i, 0).toString().length() == 0) || 
                (SecondGame_table.getValueAt(i, 1).toString().length() == 0) || 
                (SecondGame_table.getValueAt(i, 2).toString().length() == 0) ||
                (SecondGame_table.getValueAt(0, i).toString().length() == 0) || 
                (SecondGame_table.getValueAt(1, i).toString().length() == 0) || 
                (SecondGame_table.getValueAt(2, i).toString().length() == 0)) {
                
                allCellsAreFilled = false; break;
            } 
            
            // проверка диагоналей
            String k1 = SecondGame_table.getValueAt(i, i).toString();
            
            if (k1.length() != 0) _dig1 = _dig1 + Integer.parseInt(k1); 
            else { allCellsAreFilled = false; break; }
           
            String k2 = SecondGame_table.getValueAt(_NUM - 1 - i, i).toString();
            if (k2.length() != 0) _dig2 = _dig2 + Integer.parseInt(k2);
            else { allCellsAreFilled = false; break; }
        }
      
        // если ячейки заполнены
        if (allCellsAreFilled) {
            if ((_dig1 != 15) || (_dig2 != 15)) {
                System.out.println("Числа стоят неправильно!");
                System.out.println("Ошибка на диагонали!");
                flag = false;
            }
            
            // если диагонали в порядке..
            if (flag) {
                System.out.println("проверка прямых");
                
                for (int i = 0; i < _NUM; i++) {
                    for (int j = 0; j < _ROW; j++)
                        System.out.print(SecondGame_table.getValueAt(i,j) + " ");
                    System.out.println("");
                }
                
                for (int i = 0; i < _NUM; i++) {                    
                   int _row = Integer.parseInt(SecondGame_table.getValueAt(i,0).toString()) + Integer.parseInt(SecondGame_table.getValueAt(i,1).toString()) + Integer.parseInt(SecondGame_table.getValueAt(i,2).toString());
                   int _col = Integer.parseInt(SecondGame_table.getValueAt(0,i).toString()) + Integer.parseInt(SecondGame_table.getValueAt(1, i).toString()) + Integer.parseInt(SecondGame_table.getValueAt(2, i).toString());               
                    
                    if ((_row != 15) || (_col != 15)) {
                        System.out.println("Числа стоят неправильно!");
                        System.out.println("Ошибка на прямой!");
                        flag = false;
                        break;
                    }
                }
                
                if (flag) {
                    System.out.println("Вы победили!");
                    JOptionPane.showMessageDialog(null, "Магический квадрат создан!", "Вы молодец!", 1);
                }
            }
            
        } else {
            System.out.println("Заполните все поля!");
        }
    }
}
