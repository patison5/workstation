/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package practice3;
import java.awt.event.KeyEvent;
import java.util.Arrays;
import javax.swing.JOptionPane;

public class jframe extends javax.swing.JFrame {
    public jframe() {
        initComponents();
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jFrame1 = new javax.swing.JFrame();
        jButton1 = new javax.swing.JButton();
        jButton2 = new javax.swing.JButton();
        jTextField2 = new javax.swing.JTextField();
        jTextField3 = new javax.swing.JTextField();
        jScrollPane1 = new javax.swing.JScrollPane();
        jTable1 = new javax.swing.JTable();
        jTextField4 = new javax.swing.JTextField();
        jButton3 = new javax.swing.JButton();
        jScrollPane6 = new javax.swing.JScrollPane();
        jTable6 = new javax.swing.JTable();
        jFrame2 = new javax.swing.JFrame();
        jScrollPane2 = new javax.swing.JScrollPane();
        jTable2 = new javax.swing.JTable();
        jLabel3 = new javax.swing.JLabel();
        jTextField6 = new javax.swing.JTextField();
        jScrollPane5 = new javax.swing.JScrollPane();
        jTable5 = new javax.swing.JTable();
        jFrame3 = new javax.swing.JFrame();
        jScrollPane3 = new javax.swing.JScrollPane();
        jTable3 = new javax.swing.JTable();
        jLabel5 = new javax.swing.JLabel();
        jTextField8 = new javax.swing.JTextField();
        jScrollPane4 = new javax.swing.JScrollPane();
        jTable4 = new javax.swing.JTable();
        jFrame4 = new javax.swing.JFrame();
        jScrollPane8 = new javax.swing.JScrollPane();
        jTable8 = new javax.swing.JTable();
        jScrollPane9 = new javax.swing.JScrollPane();
        jTable9 = new javax.swing.JTable();
        jMenuBar1 = new javax.swing.JMenuBar();
        jMenu1 = new javax.swing.JMenu();
        jMenuItem2 = new javax.swing.JMenuItem();
        jMenu3 = new javax.swing.JMenu();
        jMenuItem4 = new javax.swing.JMenuItem();
        jMenuItem5 = new javax.swing.JMenuItem();
        jMenuItem3 = new javax.swing.JMenuItem();

        jFrame1.setTitle("byte");
        jFrame1.setBounds(new java.awt.Rectangle(0, 0, 540, 330));
        jFrame1.setLocation(new java.awt.Point(480, 200));

        jButton1.setText("<<");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        jButton2.setText(">>");
        jButton2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton2ActionPerformed(evt);
            }
        });

        jTextField2.setBackground(new java.awt.Color(102, 255, 255));
        jTextField2.setText("Знак");
        jTextField2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField2ActionPerformed(evt);
            }
        });

        jTextField3.setBackground(new java.awt.Color(255, 255, 102));
        jTextField3.setText("                                      Биты числа");
        jTextField3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField3ActionPerformed(evt);
            }
        });
        jTextField3.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTextField3KeyReleased(evt);
            }
        });

        jTable1.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {"Значение", null, null, null, null, null, null, null, null}
            },
            new String [] {
                "Вес бита", "128", "64", "32", "16", "8", "4", "2", "1"
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, true, true, true, true, true, true, true, true
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable1.getTableHeader().setReorderingAllowed(false);
        jTable1.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTable1KeyReleased(evt);
            }
        });
        jScrollPane1.setViewportView(jTable1);
        if (jTable1.getColumnModel().getColumnCount() > 0) {
            jTable1.getColumnModel().getColumn(0).setResizable(false);
        }

        jTextField4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField4ActionPerformed(evt);
            }
        });

        jButton3.setText("Обратный перевод");
        jButton3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton3ActionPerformed(evt);
            }
        });

        jTable6.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null}
            },
            new String [] {
                "Число в десятичной СС"
            }
        ));
        jTable6.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTable6KeyReleased(evt);
            }
        });
        jScrollPane6.setViewportView(jTable6);

        javax.swing.GroupLayout jFrame1Layout = new javax.swing.GroupLayout(jFrame1.getContentPane());
        jFrame1.getContentPane().setLayout(jFrame1Layout);
        jFrame1Layout.setHorizontalGroup(
            jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame1Layout.createSequentialGroup()
                .addGap(67, 67, 67)
                .addComponent(jTextField2, javax.swing.GroupLayout.PREFERRED_SIZE, 37, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jTextField3)
                .addGap(142, 142, 142))
            .addComponent(jScrollPane1, javax.swing.GroupLayout.Alignment.TRAILING)
            .addGroup(jFrame1Layout.createSequentialGroup()
                .addGap(29, 29, 29)
                .addComponent(jTextField4, javax.swing.GroupLayout.PREFERRED_SIZE, 160, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(154, 154, 154)
                .addComponent(jButton3, javax.swing.GroupLayout.PREFERRED_SIZE, 155, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, jFrame1Layout.createSequentialGroup()
                .addComponent(jScrollPane6, javax.swing.GroupLayout.PREFERRED_SIZE, 239, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 47, Short.MAX_VALUE)
                .addGroup(jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 240, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 240, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(36, 36, 36))
        );
        jFrame1Layout.setVerticalGroup(
            jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame1Layout.createSequentialGroup()
                .addGap(29, 29, 29)
                .addGroup(jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane6, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton2, javax.swing.GroupLayout.PREFERRED_SIZE, 45, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addComponent(jButton1, javax.swing.GroupLayout.PREFERRED_SIZE, 45, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(11, 11, 11)
                .addGroup(jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jTextField2, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jTextField3, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addGap(18, 18, 18)
                .addComponent(jScrollPane1, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 45, Short.MAX_VALUE)
                .addGroup(jFrame1Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jTextField4, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(jButton3))
                .addGap(27, 27, 27))
        );

        jFrame2.setTitle("float");
        jFrame2.setBounds(new java.awt.Rectangle(0, 0, 1300, 315));
        jFrame2.setLocation(new java.awt.Point(0, 200));

        jTable2.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {"Байт", "Б", "А", "Й", "Т", "№", "3", null, null, "Б", "А", "Й", "Т", "№", "2", null, null, "Б", "А", "Й", "Т", "№", "1", null, null, "Б", "А", "Й", "Т", "№", "0", null, null},
                {"№ бита", "31", "30", "29", "28", "27", "26", "25", "24", "23", "22", "21", "20", "19", "18", "17", "16", "15", "14", "13", "12", "11", "10", "9", "8", "7", "6", "5", "4", "3", "2", "1", "0"},
                {"Вес бита", "256", "128", "64", "32", "16", "8", "4", "2", "1", "0.5", "0.25", "0,1...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", "0.0...", null},
                {"бит", null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null}
            },
            new String [] {
                "", "Зн", "Х", "А", "Р", "А", "К", "Т", "Е", "Р.", "М", "А", "Н", "Т", "И", "С", "С", "А", "", "", "", "", "", "", "", "", "", "", "", "", "", "", ""
            }
        ) {
            boolean[] canEdit = new boolean [] {
                false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, false, true, false, false, false, false, false
            };

            public boolean isCellEditable(int rowIndex, int columnIndex) {
                return canEdit [columnIndex];
            }
        });
        jTable2.getTableHeader().setReorderingAllowed(false);
        jScrollPane2.setViewportView(jTable2);
        if (jTable2.getColumnModel().getColumnCount() > 0) {
            jTable2.getColumnModel().getColumn(0).setMinWidth(15);
            jTable2.getColumnModel().getColumn(0).setMaxWidth(55);
            jTable2.getColumnModel().getColumn(1).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(2).setMinWidth(3);
            jTable2.getColumnModel().getColumn(2).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(3).setMinWidth(3);
            jTable2.getColumnModel().getColumn(3).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(4).setMinWidth(3);
            jTable2.getColumnModel().getColumn(4).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(5).setMinWidth(3);
            jTable2.getColumnModel().getColumn(5).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(6).setMinWidth(3);
            jTable2.getColumnModel().getColumn(6).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(7).setMinWidth(3);
            jTable2.getColumnModel().getColumn(7).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(8).setMinWidth(3);
            jTable2.getColumnModel().getColumn(8).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(9).setMinWidth(3);
            jTable2.getColumnModel().getColumn(9).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(10).setMinWidth(3);
            jTable2.getColumnModel().getColumn(10).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(11).setMinWidth(3);
            jTable2.getColumnModel().getColumn(11).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(12).setMinWidth(3);
            jTable2.getColumnModel().getColumn(12).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(13).setMinWidth(3);
            jTable2.getColumnModel().getColumn(13).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(14).setMinWidth(3);
            jTable2.getColumnModel().getColumn(14).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(15).setMinWidth(3);
            jTable2.getColumnModel().getColumn(15).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(16).setMinWidth(3);
            jTable2.getColumnModel().getColumn(16).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(17).setMinWidth(3);
            jTable2.getColumnModel().getColumn(17).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(18).setMinWidth(3);
            jTable2.getColumnModel().getColumn(18).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(19).setMinWidth(3);
            jTable2.getColumnModel().getColumn(19).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(20).setMinWidth(3);
            jTable2.getColumnModel().getColumn(20).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(21).setMinWidth(3);
            jTable2.getColumnModel().getColumn(21).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(22).setMinWidth(3);
            jTable2.getColumnModel().getColumn(22).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(23).setMinWidth(3);
            jTable2.getColumnModel().getColumn(23).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(24).setMinWidth(3);
            jTable2.getColumnModel().getColumn(24).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(25).setMinWidth(3);
            jTable2.getColumnModel().getColumn(25).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(26).setMinWidth(3);
            jTable2.getColumnModel().getColumn(26).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(27).setMinWidth(3);
            jTable2.getColumnModel().getColumn(27).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(28).setMinWidth(3);
            jTable2.getColumnModel().getColumn(28).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(29).setMinWidth(3);
            jTable2.getColumnModel().getColumn(29).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(30).setMinWidth(3);
            jTable2.getColumnModel().getColumn(30).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(31).setMinWidth(3);
            jTable2.getColumnModel().getColumn(31).setMaxWidth(40);
            jTable2.getColumnModel().getColumn(32).setMinWidth(3);
            jTable2.getColumnModel().getColumn(32).setMaxWidth(40);
        }

        jLabel3.setText("Обратный побитовый перевод");

        jTextField6.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTextField6KeyReleased(evt);
            }
        });

        jTable5.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null}
            },
            new String [] {
                "Число"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.Float.class
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }
        });
        jTable5.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyPressed(java.awt.event.KeyEvent evt) {
                jTable5KeyPressed(evt);
            }
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTable5KeyReleased(evt);
            }
        });
        jScrollPane5.setViewportView(jTable5);

        javax.swing.GroupLayout jFrame2Layout = new javax.swing.GroupLayout(jFrame2.getContentPane());
        jFrame2.getContentPane().setLayout(jFrame2Layout);
        jFrame2Layout.setHorizontalGroup(
            jFrame2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame2Layout.createSequentialGroup()
                .addGroup(jFrame2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane2, javax.swing.GroupLayout.DEFAULT_SIZE, 1137, Short.MAX_VALUE)
                    .addGroup(jFrame2Layout.createSequentialGroup()
                        .addGroup(jFrame2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addGroup(jFrame2Layout.createSequentialGroup()
                                .addGap(23, 23, 23)
                                .addGroup(jFrame2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                                    .addComponent(jLabel3, javax.swing.GroupLayout.PREFERRED_SIZE, 174, javax.swing.GroupLayout.PREFERRED_SIZE)
                                    .addComponent(jTextField6, javax.swing.GroupLayout.PREFERRED_SIZE, 156, javax.swing.GroupLayout.PREFERRED_SIZE)))
                            .addComponent(jScrollPane5, javax.swing.GroupLayout.PREFERRED_SIZE, 375, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(0, 0, Short.MAX_VALUE)))
                .addContainerGap())
        );
        jFrame2Layout.setVerticalGroup(
            jFrame2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame2Layout.createSequentialGroup()
                .addGap(19, 19, 19)
                .addComponent(jScrollPane5, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jScrollPane2, javax.swing.GroupLayout.PREFERRED_SIZE, 107, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(18, 18, 18)
                .addComponent(jLabel3)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addComponent(jTextField6, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(56, Short.MAX_VALUE))
        );

        jFrame3.setTitle("double");
        jFrame3.setBounds(new java.awt.Rectangle(0, 0, 540, 315));
        jFrame3.setLocation(new java.awt.Point(480, 200));

        jTable3.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null, null}
            },
            new String [] {
                "Знак(63)", "Характеристика(62-52)", "Мантисса(51-0)"
            }
        ));
        jScrollPane3.setViewportView(jTable3);
        if (jTable3.getColumnModel().getColumnCount() > 0) {
            jTable3.getColumnModel().getColumn(0).setMaxWidth(100);
        }

        jLabel5.setBackground(new java.awt.Color(204, 204, 255));
        jLabel5.setText("Обратный перевод");

        jTextField8.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jTextField8ActionPerformed(evt);
            }
        });

        jTable4.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null}
            },
            new String [] {
                "Число"
            }
        ) {
            Class[] types = new Class [] {
                java.lang.Double.class
            };

            public Class getColumnClass(int columnIndex) {
                return types [columnIndex];
            }
        });
        jTable4.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTable4KeyReleased(evt);
            }
        });
        jScrollPane4.setViewportView(jTable4);

        javax.swing.GroupLayout jFrame3Layout = new javax.swing.GroupLayout(jFrame3.getContentPane());
        jFrame3.getContentPane().setLayout(jFrame3Layout);
        jFrame3Layout.setHorizontalGroup(
            jFrame3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame3Layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(jFrame3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                    .addComponent(jScrollPane3, javax.swing.GroupLayout.PREFERRED_SIZE, 0, Short.MAX_VALUE)
                    .addGroup(jFrame3Layout.createSequentialGroup()
                        .addGroup(jFrame3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(jLabel5)
                            .addComponent(jTextField8, javax.swing.GroupLayout.PREFERRED_SIZE, 98, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 375, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(0, 5, Short.MAX_VALUE)))
                .addContainerGap())
        );
        jFrame3Layout.setVerticalGroup(
            jFrame3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame3Layout.createSequentialGroup()
                .addGap(31, 31, 31)
                .addComponent(jScrollPane4, javax.swing.GroupLayout.PREFERRED_SIZE, 44, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(35, 35, 35)
                .addComponent(jScrollPane3, javax.swing.GroupLayout.PREFERRED_SIZE, 43, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(36, 36, 36)
                .addComponent(jLabel5)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.UNRELATED)
                .addComponent(jTextField8, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE))
        );

        jFrame4.setTitle("char");
        jFrame4.setBounds(new java.awt.Rectangle(0, 0, 720, 315));
        jFrame4.setLocation(new java.awt.Point(200, 200));

        jTable8.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {null, null}
            },
            new String [] {
                "Символ", "Десятичный код"
            }
        ));
        jTable8.addKeyListener(new java.awt.event.KeyAdapter() {
            public void keyReleased(java.awt.event.KeyEvent evt) {
                jTable8KeyReleased(evt);
            }
        });
        jScrollPane8.setViewportView(jTable8);
        if (jTable8.getColumnModel().getColumnCount() > 0) {
            jTable8.getColumnModel().getColumn(0).setMaxWidth(200);
            jTable8.getColumnModel().getColumn(1).setMaxWidth(200);
        }

        jTable9.setModel(new javax.swing.table.DefaultTableModel(
            new Object [][] {
                {"Биты в тетраде", null, null, null, null},
                {"16-чная цифра", null, null, null, null}
            },
            new String [] {
                "Тетрада", "Тетрада 3 (15-12)", "Tетраа 2 (11-8)", "Тетрада 1 (7-4)", "Тетрада 0 (3-0)"
            }
        ));
        jScrollPane9.setViewportView(jTable9);
        if (jTable9.getColumnModel().getColumnCount() > 0) {
            jTable9.getColumnModel().getColumn(0).setMaxWidth(150);
            jTable9.getColumnModel().getColumn(1).setMaxWidth(150);
            jTable9.getColumnModel().getColumn(2).setMaxWidth(150);
            jTable9.getColumnModel().getColumn(3).setMaxWidth(150);
            jTable9.getColumnModel().getColumn(4).setMaxWidth(150);
        }

        javax.swing.GroupLayout jFrame4Layout = new javax.swing.GroupLayout(jFrame4.getContentPane());
        jFrame4.getContentPane().setLayout(jFrame4Layout);
        jFrame4Layout.setHorizontalGroup(
            jFrame4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame4Layout.createSequentialGroup()
                .addComponent(jScrollPane8, javax.swing.GroupLayout.PREFERRED_SIZE, 401, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(0, 0, Short.MAX_VALUE))
            .addComponent(jScrollPane9, javax.swing.GroupLayout.DEFAULT_SIZE, 567, Short.MAX_VALUE)
        );
        jFrame4Layout.setVerticalGroup(
            jFrame4Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jFrame4Layout.createSequentialGroup()
                .addGap(39, 39, 39)
                .addComponent(jScrollPane8, javax.swing.GroupLayout.PREFERRED_SIZE, 45, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 80, Short.MAX_VALUE)
                .addComponent(jScrollPane9, javax.swing.GroupLayout.PREFERRED_SIZE, 61, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(69, 69, 69))
        );

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        setLocation(new java.awt.Point(480, 200));

        jMenu1.setText("Переменные");

        jMenuItem2.setText("Целочисленные");
        jMenuItem2.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem2ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem2);

        jMenu3.setText("Вещественные");

        jMenuItem4.setText("Одинарная точность");
        jMenuItem4.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem4ActionPerformed(evt);
            }
        });
        jMenu3.add(jMenuItem4);

        jMenuItem5.setText("Двойная точность");
        jMenuItem5.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem5ActionPerformed(evt);
            }
        });
        jMenu3.add(jMenuItem5);

        jMenu1.add(jMenu3);

        jMenuItem3.setText("Символьный");
        jMenuItem3.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem3ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem3);

        jMenuBar1.add(jMenu1);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 400, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 279, Short.MAX_VALUE)
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents
    private void jMenuItem4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem4ActionPerformed
        jFrame2.setVisible(true);
    }//GEN-LAST:event_jMenuItem4ActionPerformed
    private void jMenuItem5ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem5ActionPerformed
        jFrame3.setVisible(true);
    }//GEN-LAST:event_jMenuItem5ActionPerformed
    private void jMenuItem2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem2ActionPerformed
        jFrame1.setVisible(true); 
    }//GEN-LAST:event_jMenuItem2ActionPerformed
    private void jMenuItem3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem3ActionPerformed
        jFrame4.setVisible(true);
    }//GEN-LAST:event_jMenuItem3ActionPerformed
    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        sdvig2();
    }//GEN-LAST:event_jButton1ActionPerformed
    private void jButton2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton2ActionPerformed
        sdvig1();
    }//GEN-LAST:event_jButton2ActionPerformed
    private void jTextField2ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField2ActionPerformed
   
    }//GEN-LAST:event_jTextField2ActionPerformed
    private void jTextField3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField3ActionPerformed
     
    }//GEN-LAST:event_jTextField3ActionPerformed
    private void jTextField8ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField8ActionPerformed
      
    }//GEN-LAST:event_jTextField8ActionPerformed

    private void jTable6KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable6KeyReleased
        int keyCode = evt.getKeyCode();
        int a = Integer.parseInt(jTable6.getValueAt(0,0) + "");

        if(a >= 256){
            JOptionPane.showMessageDialog(null, "Введите число из диапозона от -127 до 255",null,0);
        } else if (keyCode==KeyEvent.VK_ENTER) {
            if(a>0) {
                a_func();
            } else if (-127<a&&a<=0){
                perevod_minus();
            } else { JOptionPane.showMessageDialog(null, "Введите число из диапозона от -127 до 255",null,0);} 
        } 
    }//GEN-LAST:event_jTable6KeyReleased

    private void jButton3ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton3ActionPerformed
        int a = Integer.parseInt(jTable6.getValueAt(0,0) + "");
        
        if(a < 0){
            obratny_perevod();
        }
        if(a > 0){
            String S="";
            
            for(int i = 0; i <= 7; i++)
                S = S + jTable1.getValueAt(0,i+1);
            
            jTextField4.setText(String.valueOf(Integer.parseInt(S,2)));
        }
    }//GEN-LAST:event_jButton3ActionPerformed

    private void jTextField4ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jTextField4ActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_jTextField4ActionPerformed

    private void jTextField3KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTextField3KeyReleased
  
       
    }//GEN-LAST:event_jTextField3KeyReleased

    private void jTable5KeyPressed(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable5KeyPressed

    }//GEN-LAST:event_jTable5KeyPressed

    private void jTable5KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable5KeyReleased
        int keyCode = evt.getKeyCode();
        
        if(keyCode == KeyEvent.VK_ENTER){
            perevod_float();
        }
    }//GEN-LAST:event_jTable5KeyReleased

    private void jTable4KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable4KeyReleased
        int keyCode = evt.getKeyCode();
        
        if(keyCode == KeyEvent.VK_ENTER){
            perevod_double();
        }        
    }//GEN-LAST:event_jTable4KeyReleased

    private void jTextField6KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTextField6KeyReleased

    }//GEN-LAST:event_jTextField6KeyReleased

    private void jTable1KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable1KeyReleased
        int keyCode = evt.getKeyCode();

        if (keyCode == KeyEvent.VK_ENTER){
            String S="";
            for(int i=0;i<=7;i++)
            S=S+jTable1.getValueAt(0,i+1);
            jTextField4.setText(String.valueOf(Integer.parseInt(S,2)));
        }     
    }//GEN-LAST:event_jTable1KeyReleased

    private void jTable8KeyReleased(java.awt.event.KeyEvent evt) {//GEN-FIRST:event_jTable8KeyReleased
        int keyCode = evt.getKeyCode();
        
        if(keyCode == KeyEvent.VK_ENTER){
            perevod_char();
        }
    }//GEN-LAST:event_jTable8KeyReleased
    public void a_func() {
        int b = Integer.parseInt(jTable6.getValueAt(0,0)+"");
        String a = Integer.toString(b,2);
        
        for(int i = 0; i < a.length(); i++)
            jTable1.setValueAt(a.charAt(a.length()-i-1), 0,8-i);
        
        for(int i = 1; i <= 8 - a.length(); i++)
           jTable1.setValueAt(0, 0, i);
    }
    
    //для перевода отрицательных чисел
    public void obratny_perevod() {
        String a = "", b = "";

        for(int i = 0; i <= 7; i++){
            a = a + jTable1.getValueAt(0,i+1);
        }
        int mas[]={0,0,0,0,0,0,0,0};
        int n=8; 
        
        String ot=Integer.toBinaryString(Integer.parseInt(a, 2) - Integer.parseInt("00000001", 2));
        for(int i=0;i<ot.length();i++){
            mas[n-i-1] = ot.charAt(ot.length()-i-1)-48;
        }
        
        //обратный код
        for(int i = 0; i < n; i++){ 
            mas[i] =( mas[i] == 1 ? 0 : 1); 
        } 
        
        for(int i = 0; i < n; i++){ 
            b = b + mas[i]; 
        } 
   
     jTextField4.setText("-"+String.valueOf(Integer.parseInt(b,2)));
    }

    //Сдвиг >>
    public void sdvig1(){
        String S="";
        for(int i=0;i<=7;i++) {
            S = S + jTable1.getValueAt(0,i+1);
        }
        
        int a = Integer.parseInt(S, 2);
        a = a >> 1;
        
        String b = Integer.toString(a,2);
        
        jTextField4.setText(String.valueOf(Integer.parseInt(b,2)));
        
        for(int i=0;i<b.length();i++)
            jTable1.setValueAt(b.charAt(b.length()-i-1), 0,8-i);
        
        for(int i=1;i<=8-b.length();i++)
           jTable1.setValueAt(0, 0, i);
    }
    
   //Сдвиг <<
    public void sdvig2() {
        String S = "";
        
        for(int i = 0; i <= 7; i++){
            S = S + jTable1.getValueAt(0,i+1);
        }
        
        int a = Integer.parseInt(S, 2);
        a = a << 1;
        String b = Integer.toString(a,2);
        jTextField4.setText(String.valueOf(Integer.parseInt(b,2)));

        for(int i = 0; i < b.length(); i++)
            jTable1.setValueAt(b.charAt(b.length()-i-1), 0,8-i);

        for(int i = 1; i <= 8 - b.length(); i++)
           jTable1.setValueAt(0, 0, i);
    
   
    
    }
   //Перевод отрицательного числа 
    public void perevod_minus(){
        String s="";
        int b=Integer.parseInt(jTable6.getValueAt(0,0)+"");
        String a = Integer.toString(b,2);
        int mas[] = {0,0,0,0,0,0,0,0};
        int n = 8; 

        //прямой код
        for(int i = 0; i < a.length(); i++){
            mas[n-i-1] = a.charAt(a.length()-i-1)-48;
        }

        //обратный код
        for(int i=0;i<n;i++){
            mas[i]=(mas[i]==1?0:1);
        }

        for(int i=0;i<n;i++){
            s=s+mas[i];
        } 

        String ot=Integer.toBinaryString(Integer.parseInt(s, 2) + Integer.parseInt("00000001", 2));

        for(int i=0;i<ot.length();i++)
            jTable1.setValueAt(ot.charAt(ot.length()-i-1), 0,8-i);

        for(int i=1;i<=8-ot.length();i++)
           jTable1.setValueAt(0, 0, i);
    }
    
    public void perevod_float(){
        float d=Float.parseFloat(jTable5.getValueAt(0,0)+"");
        String str = Integer.toBinaryString(Float.floatToRawIntBits(d));
        
        if(d > 0)
            str = 0 + str;
        
        for(int i = 0; i < str.length(); i++)
            jTable2.setValueAt(str.charAt(i), 3, i+1);
        
        int p = 0;
        float per = 128f;
        
        for(int i = 1; i < 9; i++) {
            if(str.charAt(i) == '1'){
                p = (int) (p + per);
                per = per / 2;
            } else{
                per = per / 2;
            }
        }
        
        per = -1f;
        int e = p - 127;
        
        double man = 1;
        
        for(int i = 9; i < 32; i++) {
            if(str.charAt(i) == '1') {
                man = man + Math.pow(2, per);
                per--;
            } else{
                per--;
            }
        }
        
        double ob = 0f;
        
        if(str.charAt(0) == '1'){
            ob = (-1) * man * Math.pow(2,e);
        } else{
            ob = man * Math.pow(2,e);
        }
        
        int zam = (int) ob;
        int counter = 0;
        
        if(zam == ob){
           jTextField6.setText(String.format("%.23f", zam));
            System.out.println(String.format("%.23f", zam));
            String S2=Double.toString(zam);

            for(int i=S2.length()-1;i>0;i--){
                if(S2.charAt(i)==0){
                    counter++;
                }
           }
            
            String S3=S2.substring(0,S2.length()-counter);
            System.out.println(S3 );
            jTextField6.setText(S3);
        } else{
            jTextField6.setText(String.format("%.23f", ob));
            String S2=Double.toString(ob);
            for(int i=S2.length()-1;i>0;i--){
                if(S2.charAt(i)==0){
                    counter++;
                }
            }
            
            String S3 = S2.substring(0,S2.length()-counter);
            System.out.println(S3 );
            jTextField6.setText(S3);
            System.out.println(String.format("%.23f", ob));
        }
    }

   public void perevod_char(){
   char ca = 0;
        String a = "";
        long k = 0;
        a = (String) jTable8.getValueAt(0, 0);
        
            ca = a.charAt(0);
            k = ca;
            String s1 = "", s2 = ""; 
            // вес 16-ричной цифры, ее десятичный эквивалент и массив значений 16-рич. цифр
            int v = 1, sh = 0;
            Object[] shi = {0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F'};  
            for (long j = 1; j <= 32768; j = j + j){
                if ((k & j) > 0){ 
                    s1 = "1" + s1;
                    sh = sh + v; 
                } else s1 = "0" + s1;
                v = v + v;
                if (v > 8){ 
                    v = 1;
                    s1 = "" + s1;
                    s2 = shi[sh] + s2;
                    sh = 0;
                }
            }
            jTable8.setValueAt(k,0,1);
            
            int k2 =1;
            for(int i = 0; i < 16; i=i+4){
                jTable9.setValueAt(s1.substring(i,i+4),0,k2);
                k2++;
            }
             for(int i = 0; i < 4; i++){
                jTable9.setValueAt(s2.charAt(i),1,i+1);
            }
   
        
   }
   
    public void perevod_double(){
        double d = Double.parseDouble(jTable4.getValueAt(0,0)+"");
        long biti = Double.doubleToRawLongBits(d);
        
        // вычисление знака числа
        long z = d >= 0 ? 0 : 1;
        
        // вычисление характеристики числа
        long har = 0;
        
        //вес первого бита
        int v = 52; 
        
        for (int i = 1; i <= 1024; i = i + i) {
            //Вычисление значения текущего бита
            long bi = biti & (long) Math.pow(2, v);

            if (bi != 0) bi=1;

            har = har + i* bi;
            ++v;
        }

        double man = 0;
        double j = 0.5d;

        for (v = 51; v >= 0; --v) {
            //Вычисление значения текущего бита
            long bi = biti & (long) Math.pow(2, v);
            
            if (bi != 0) bi = 1;
            
            man = man + j* bi;
            j = j / 2;
        }    
    
        double d1 = (man+1)*Math.pow(2, har - 1024 + 1)*(1-2*z); 
        jTable3.setValueAt(z, 0, 0);
        jTable3.setValueAt(har, 0, 1);
        jTable3.setValueAt(man, 0, 2);
        jTextField8.setText(String.valueOf(d1));
    }
       
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
            java.util.logging.Logger.getLogger(jframe.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(jframe.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(jframe.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(jframe.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new jframe().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton jButton1;
    private javax.swing.JButton jButton2;
    private javax.swing.JButton jButton3;
    private javax.swing.JFrame jFrame1;
    private javax.swing.JFrame jFrame2;
    private javax.swing.JFrame jFrame3;
    private javax.swing.JFrame jFrame4;
    private javax.swing.JLabel jLabel3;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenu jMenu3;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JMenuItem jMenuItem2;
    private javax.swing.JMenuItem jMenuItem3;
    private javax.swing.JMenuItem jMenuItem4;
    private javax.swing.JMenuItem jMenuItem5;
    private javax.swing.JScrollPane jScrollPane1;
    private javax.swing.JScrollPane jScrollPane2;
    private javax.swing.JScrollPane jScrollPane3;
    private javax.swing.JScrollPane jScrollPane4;
    private javax.swing.JScrollPane jScrollPane5;
    private javax.swing.JScrollPane jScrollPane6;
    private javax.swing.JScrollPane jScrollPane8;
    private javax.swing.JScrollPane jScrollPane9;
    private javax.swing.JTable jTable1;
    private javax.swing.JTable jTable2;
    private javax.swing.JTable jTable3;
    private javax.swing.JTable jTable4;
    private javax.swing.JTable jTable5;
    private javax.swing.JTable jTable6;
    private javax.swing.JTable jTable8;
    private javax.swing.JTable jTable9;
    private javax.swing.JTextField jTextField2;
    private javax.swing.JTextField jTextField3;
    private javax.swing.JTextField jTextField4;
    private javax.swing.JTextField jTextField6;
    private javax.swing.JTextField jTextField8;
    // End of variables declaration//GEN-END:variables

    
}
