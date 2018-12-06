package practica_3;

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
