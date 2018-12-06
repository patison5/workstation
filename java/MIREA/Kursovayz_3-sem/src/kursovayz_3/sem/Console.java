/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package kursovayz_3.sem;

/**
 *
 * @author patison5
 */
public class Console {
    public void log(String str) {
        System.out.println(str);
    }
    public void log(int str) {
        System.out.println(str);
    }
    public void log(double str) {
        System.out.println(str);
    }
    public void log(float str) {
        System.out.println(str);
    }
    public void log(int A[]) {
        System.out.print("[");
        for (int i = 0; i < A.length - 1; i++)
            System.out.print(A[i] + ",");
        System.out.println(A[A.length-1] + "]("+A.length+")");
    }  
}
