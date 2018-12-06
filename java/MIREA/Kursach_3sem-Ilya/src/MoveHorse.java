
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
public class MoveHorse {
    private javax.swing.JTable Table3;
    public MoveHorse(javax.swing.JTable T3){
        Table3 = T3;
    }
    
    public void SetupHorse(int row, int column){
        String WhiteHorseStart = "\u2658";
        Table3.setValueAt(" " + WhiteHorseStart, row, column);
    }
    
    void MoveHorse(int row, int column){
        int row1 = row;
        int column1 = column;
        
        if(kurs.X == 0 && kurs.Y == 0){
            //клетка в которую мы ставим коня
            kurs.X = row1;
            kurs.Y = column1;
            
            SetupHorse(row, column);
        }else{
            
            int absX = Math.abs(kurs.X - row1);
            int absY = Math.abs(kurs.Y - column1);
            
            String OldPoz = "";
            String NewPoz = (String) Table3.getValueAt(row1, column1);
            
            if(((absX == 2) && (absY == 1)) || ((absX == 1) && (absY == 2))){
                if(NewPoz == null || NewPoz == ""){
                    OldPoz = (String) Table3.getValueAt(kurs.X, kurs.Y);
                    
                    Table3.setValueAt(" X", kurs.X, kurs.Y);
                    Table3.setValueAt(OldPoz, row, column);
                    
                    kurs.X = row1;
                    kurs.Y = column1;
                    kurs.count1++;
                    
                    //CheckLastMove(X,Y);
                    
                }else{
                JOptionPane.showMessageDialog(null, "Этот ход запрещен!" , "Ошибка!", 1);
                }
            }
        }
        
    }
    
}
