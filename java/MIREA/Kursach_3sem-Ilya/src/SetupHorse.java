/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author ilya2
 */
public class SetupHorse {
    public static javax.swing.JTable Table1;
    private static javax.swing.JTable Table2;
    
    public SetupHorse(javax.swing.JTable T1, javax.swing.JTable T2){
        Table1 = T1;
        Table2 = T2;
    }
    
    public static void SetupElement(){
        String WhiteHorseStart = "\u2658";//Segoe UI Symbol
        String BlackHorseStrat = "\u265e";
        
        for(int i = 1; i < 4; i++){
            Table1.setValueAt("  " + WhiteHorseStart,0,i);
        }
        for(int i = 1; i < 4; i++){ 
            Table1.setValueAt(null,1,i); 
        }
        for(int i = 1; i < 4; i++){
            Table1.setValueAt("  " + BlackHorseStrat,2,i);
        }
        for(int i = 0; i <= 2; i++){
            for(int j = 0; j < 24; j++)
                Table2.setValueAt(null,j,i); 
            kurs.kk = 0;
            kurs.ll = 0;
            kurs.jj = 0;
        }
        SetupIntVal();
    }


    public static void SetupIntVal(){//сохранение начального значения для сравнения с конечным, для проверки на победу
        for(int i = 1; i < 4; i++){
            kurs.WhiteHorse = kurs.WhiteHorse + (String) Table1.getValueAt(0,i);
        }
        
        for(int i = 1; i < 4; i++){
            kurs.BlackHorse = kurs.BlackHorse + (String) Table1.getValueAt(2,i);
        }
    }












}