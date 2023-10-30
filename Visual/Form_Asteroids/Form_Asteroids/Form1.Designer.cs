namespace Form_Asteroids
{
    partial class Form
    {
        /// <summary>
        /// Variable del diseñador necesaria.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Limpiar los recursos que se estén usando.
        /// </summary>
        /// <param name="disposing">true si los recursos administrados se deben desechar; false en caso contrario.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Código generado por el Diseñador de Windows Forms

        /// <summary>
        /// Método necesario para admitir el Diseñador. No se puede modificar
        /// el contenido de este método con el editor de código.
        /// </summary>
        private void InitializeComponent()
        {
            this.components = new System.ComponentModel.Container();
            this.btnIniciar = new System.Windows.Forms.Button();
            this.tmr_velocidad = new System.Windows.Forms.Timer(this.components);
            this.ptb_Escenario = new System.Windows.Forms.PictureBox();
            ((System.ComponentModel.ISupportInitialize)(this.ptb_Escenario)).BeginInit();
            this.SuspendLayout();
            // 
            // btnIniciar
            // 
            this.btnIniciar.Location = new System.Drawing.Point(38, 330);
            this.btnIniciar.Name = "btnIniciar";
            this.btnIniciar.Size = new System.Drawing.Size(85, 21);
            this.btnIniciar.TabIndex = 0;
            this.btnIniciar.Text = "Iniciar";
            this.btnIniciar.UseVisualStyleBackColor = true;
            this.btnIniciar.Click += new System.EventHandler(this.btnIniciar_Click);
            // 
            // tmr_velocidad
            // 
            this.tmr_velocidad.Interval = 1000;
            this.tmr_velocidad.Tick += new System.EventHandler(this.tmr_velocidad_Tick);
            // 
            // ptb_Escenario
            // 
            this.ptb_Escenario.Location = new System.Drawing.Point(13, 26);
            this.ptb_Escenario.Name = "ptb_Escenario";
            this.ptb_Escenario.Size = new System.Drawing.Size(341, 298);
            this.ptb_Escenario.TabIndex = 1;
            this.ptb_Escenario.TabStop = false;
            // 
            // Form
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(418, 378);
            this.Controls.Add(this.ptb_Escenario);
            this.Controls.Add(this.btnIniciar);
            this.Name = "Form";
            this.Text = "Juego";
            ((System.ComponentModel.ISupportInitialize)(this.ptb_Escenario)).EndInit();
            this.ResumeLayout(false);

        }

        #endregion

        private System.Windows.Forms.Button btnIniciar;
        private System.Windows.Forms.Timer tmr_velocidad;
        private System.Windows.Forms.PictureBox ptb_Escenario;
    }
}

