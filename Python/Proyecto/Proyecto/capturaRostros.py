import cv2
import os

#cambia el nombre para nuevo reconocedor
personName = 'Fabricio'
dataPath = 'C:/Users/yisak/Documents/Python/Proyecto/reconocimiento' #Cambia a la ruta donde hayas almacenado Data
personPath = dataPath + '/' + personName

if not os.path.exists(personPath):
	print('Carpeta creada: ',personPath)
	os.makedirs(personPath)

ip_address = '172.17.44.175'
port = 4747

# URL de la transmisión de video
video_url = f'http://{ip_address}:{port}/video'
cap = cv2.VideoCapture(video_url)

face_cascade = cv2.CascadeClassifier(cv2.data.haarcascades + 'haarcascade_frontalface_default.xml')

count = 0
while True:
    # Lee el cuadro actual del video
    ret, frame = cap.read()
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)
    auxFrame = gray.copy()
    
    faces = face_cascade.detectMultiScale(gray, scaleFactor=1.1, minNeighbors=5, minSize=(30, 30))

    for(x,y,w,h) in faces:
        cv2.rectangle(frame, (x,y),(x+w,y+h),(0,255,0),2)
        rostro = auxFrame[y:y+h,x:x+w]
        rostro = cv2.resize(rostro,(150,150),interpolation= cv2.INTER_CUBIC)
        cv2.imwrite(personPath + '/rotro_{}.jpg'.format(count),rostro)
        count = count + 1
    cv2.imshow("Frame", frame)

    # Si se presiona la tecla 'q', sale del bucle
    k =  cv2.waitKey(1)
    if k == 27 or count >= 300:
        break

# Libera los recursos
cap.release()
cv2.destroyAllWindows()