
import java.awt.Color;
import javax.swing.JOptionPane;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ilya2
 */
public class MoveElement {
    public javax.swing.JTable Table1;
    private static javax.swing.JTable Table2;
    
    public MoveElement(javax.swing.JTable T1, javax.swing.JTable T2){
        Table1 = T1;
        Table2 = T2;
    }
    
    public void MoveHorse(int x1,int y1){//перестановка фигур
        int x2 = x1;
        int y2 = y1;
        
        if(kurs.X == 0 && kurs.Y == 0){
            kurs.X = x2;
            kurs.Y = y2;
            
            Color myColor = new Color(102, 102, 102);
            Table1.setSelectionBackground(myColor);
            
        }else{
            Color myColor = new Color(204, 204, 204);
            Table1.setSelectionBackground(myColor);
            
            int z1 = Math.abs(kurs.X - x2);
            int z2 = Math.abs(kurs.Y - y2);
            
            String OldPoz = "";
            String NewPoz = (String) Table1.getValueAt(x1, y1);
            
            if(((z1 == 1) && (z2 == 2)) || ((z1 == 2) && (z2 == 1))){
                if(NewPoz == null || NewPoz == ""){
                    OldPoz = (String) Table1.getValueAt(kurs.X, kurs.Y);
                    Table1.setValueAt("", kurs.X, kurs.Y);//первый клик
                    Table1.setValueAt(OldPoz, x1, y1);//второй клик
                    
                    LaunchInput(kurs.Y, y1, x1, OldPoz);
                }else{
                    JOptionPane.showMessageDialog(null, "Клетка занята другой фигурой, либо вы не выбрали фигуру!" , "Ошибка!", 1);
                }
            }
            
            kurs.X = 0;
            kurs.Y = 0;
            CheckWin();
        }
    }
    
    public void CheckWin(){//проверка на победу
        String WhiteHorse1 = "";
        String BlackHorse1 = "";
        
        for(int i = 1; i < 4; i++){
            WhiteHorse1 = WhiteHorse1 + (String) Table1.getValueAt(0,i);
        }
        for(int i = 1; i < 4; i++){
            BlackHorse1 = BlackHorse1 + (String) Table1.getValueAt(2,i);
        }
        if((kurs.WhiteHorse.equals(BlackHorse1)) && (kurs.BlackHorse.equals(WhiteHorse1))){
            JOptionPane.showMessageDialog(null, "Фигуры переставлены, конец игры!", "Вы молодец!", 1);
            kurs.WhiteHorse = "";
            kurs.BlackHorse = "";
            
            SetupHorse.SetupElement();
        }
    }
    
    public void LaunchInput(int Y, int y1, int x1, String OldPoz){
        InputMove1(OldPoz);
        InputMove2(Y);
        InputMove3(y1,x1);
    }
    
    public void InputMove1(String OldPoz){
        Table2.setValueAt(OldPoz, kurs.kk, 0);
        kurs.jj++;
    }
    
    public void InputMove2(int y2){
        if(y2 == 1){
            Table2.setValueAt("A"+(kurs.X+1), kurs.kk, 1);
            kurs.kk++;
        }else if(y2 == 2){
            Table2.setValueAt("B"+(kurs.X+1), kurs.kk, 1);
            kurs.kk++;
        }else if(y2 == 3){
            Table2.setValueAt("C"+(kurs.X+1), kurs.kk, 1);
            kurs.kk++;
        }
    }
    
    public void InputMove3(int y1, int x1){
        if(y1 == 1){
            Table2.setValueAt("A"+(x1+1), kurs.ll, 2);
            kurs.ll++;
        }else if(y1 == 2){
            Table2.setValueAt("B"+(x1+1), kurs.ll, 2);
            kurs.ll++;
        }else if(y1 == 3){
            Table2.setValueAt("C"+(x1+1), kurs.ll, 2);
            kurs.ll++;
        }
    }
}
