/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package practica_3;

/**
 *
 * @author patison5
 */
public class window extends javax.swing.JFrame {

    Console console = new Console();

    /**
     * Creates new form window
     */
    public window() {
        initComponents();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        area1 = new javax.swing.JTextField();
        mv_right = new javax.swing.JButton();
        mv_left = new javax.swing.JButton();
        jScrollPane1 = new javax.swing.JScrollPane();
        table = new javax.swing.JTable();
        area2 = new javax.swing.JTextField();
        btn_back = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setTitle("test");

        jLabel1.setFont(new java.awt.Font("Tahoma", 0, 14)); // NOI18N
        jLabel1.setText("число в 10 с/c");

        area1.addFocusListener(new java.awt.event.FocusAdapter() {
            public void focusLost(java.awt.event.FocusEvent evt) {
                area1FocusLost(evt);
            }
        });
        area1.addInputMethodListener(new java.awt.event.InputMethodListener() {
            public void inputMethodTextChanged(java.awt.event.InputMethodEvent evt) {
                noooo(evt);
            }
            public void caretPositionChanged(java.awt.event.InputMethodEvent evt) {
            }
        });

        mv_right.setText(">>");
        mv_right.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                mv_rightActionPerformed(evt);
            }
        });

        mv_left.setText("<<");
        mv_left.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                mv_leftActionPerformed(evt);
            }
        });

        table.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {"значение", null, null, null, null, null, null, null, null}
            },
            new String [] {
                "вес бита", "128", "64", "32", "16", "8", "4", "2", "1"
            }
        ));
        jScrollPane1.setViewportView(table);

        btn_back.setText("обратный перевод");
        btn_back.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btn_backActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane1)
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(layout.createSequentialGroup()
                                .addComponent(area1, javax.swing.GroupLayout.PREFERRED_SIZE, 188, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(119, 119, 119)
                                .addComponent(mv_left, javax.swing.GroupLayout.PREFERRED_SIZE, 83, javax.swing.GroupLayout.PREFERRED_SIZE)
                                .addGap(26, 26, 26)
                                .addComponent(mv_right, javax.swing.GroupLayout.PREFERRED_SIZE, 83, javax.swing.GroupLayout.PREFERRED_SIZE))
                            .addComponent(jLabel1))
                        .addGap(0, 0, Short.MAX_VALUE))
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(area2, javax.swing.GroupLayout.PREFERRED_SIZE, 188, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                        .addComponent(btn_back, javax.swing.GroupLayout.PREFERRED_SIZE, 185, javax.swing.GroupLayout.PREFERRED_SIZE)))
                .addContainerGap())
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, layout.createSequentialGroup()
                .addGap(24, 24, 24)
                .addComponent(jLabel1)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(area1)
                    .addComponent(mv_right, javax.swing.GroupLayout.DEFAULT_SIZE, 38, Short.MAX_VALUE)
                    .addComponent(mv_left, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
                .addGap(30, 30, 30)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(31, 31, 31)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(btn_back, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addComponent(area2, javax.swing.GroupLayout.DEFAULT_SIZE, 38, Short.MAX_VALUE))
                .addContainerGap())
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void mv_leftActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_mv_leftActionPerformed
        // TODO add your handling code here:
        Functions func = new Functions();
        String str = area1.getText(); 
        System.out.println(func.moveLeft(func.getByteCode(str)));
        
        area1.setText(func.getNumberByByteCode(func.moveLeft(func.getByteCode(str))));
        area2.setText(func.getNumberByByteCode(func.moveLeft(func.getByteCode(str))));
        setTable(func.getByteCode(str));
    }//GEN-LAST:event_mv_leftActionPerformed

    private void mv_rightActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_mv_rightActionPerformed
        // TODO add your handling code here:
        String str = area1.getText(); 
        Functions func = new Functions();
        System.out.println(func.moveRight(func.getByteCode(str)));
        
        area1.setText(func.getNumberByByteCode(func.moveRight(func.getByteCode(str))));
        area2.setText(func.getNumberByByteCode(func.moveRight(func.getByteCode(str))));
        setTable(func.getByteCode(str));
    }//GEN-LAST:event_mv_rightActionPerformed

    private void btn_backActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btn_backActionPerformed
        // TODO add your handling code here:
        String str = area1.getText(); 
        Functions func = new Functions();
        area2.setText(func.getNumberByByteCode(func.getByteCode(str)));
    }//GEN-LAST:event_btn_backActionPerformed

    private void noooo(java.awt.event.InputMethodEvent evt) {//GEN-FIRST:event_noooo
        // TODO add your handling code here:
        System.out.println("gello");
    }//GEN-LAST:event_noooo

    private void setTable (String str) {
        int n = 8;
        for (int i = 0; i < str.length(); i++) 
            table.setValueAt(str.charAt(str.length() - i - 1), 0, n - i);
        
        for (int i = 1; i <= n - str.length(); i++)
            table.setValueAt(0, 0, i);
    }
    
    

    private void area1FocusLost(java.awt.event.FocusEvent evt) {//GEN-FIRST:event_area1FocusLost
        // TODO add your handling code here:
        Functions func = new Functions();
        
        String str = area1.getText();
        String res = "";
        
        
        int k = Integer.parseInt(str);
        
        if (k >= 0) {
            res = func.getByteCode(str);
            setTable(res);
        } else {
            // console.log(func.getNumberByByteCode("11111111"));

            res = func.getByteCode(Math.abs(k) + "");
            res = func.getAdditionalByteCode(res);

            setTable(res);
        }

        console.log(func.getHex("111111111111111111111111111111111"));
    }//GEN-LAST:event_area1FocusLost


    
    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(window.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(window.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(window.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(window.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new window().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JTextField area1;
    private javax.swing.JTextField area2;
    private javax.swing.JButton btn_back;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JButton mv_left;
    private javax.swing.JButton mv_right;
    private javax.swing.JTable table;
    // End of variables declaration//GEN-END:variables
}