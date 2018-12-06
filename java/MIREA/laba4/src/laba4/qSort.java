/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package laba4;

/**
 *
 * @author patison5
 */
public class qSort {
    int n = 10;
    int[] mass;
    
    void qSort () {
        for (int i = 0; i < mass.length; i++)
            mass[i] = 0;
    }
    
    public void set(int[] m) {
        mass = m;
        
        n = m.length;
    }
    
    public int[] get () {
        return mass;
    }
    
    public void printIt () {
        for (int i = 0; i < n; i++) 
            System.out.println(mass[i]);
    }
    
    public void quickSort(int last, int first) {
        if (mass.length == 0)
            return;
 
        if (last >= first)
            return;
 
        int per = last + (first - last) / 2;
        int mid = mass[per];
        
        int l = last, 
            f = first;       
        
        while (l <= f) {
            while (mass[l] < mid) l++;
 
            while (mass[f] > mid) f--;
 
            if (l <= f) {
                int temp = mass[l];
                mass[l] = mass[f];
                mass[f] = temp;
                l++;
                f--;
            }
        }
        
        if (last < f)
            quickSort(last, f);
 
        if (first > l)
            quickSort(l, first);
    }
}
