# traffic_simulation.ipynb

import numpy as np
import matplotlib.pyplot as plt
import tensorflow as tf
from tensorflow import keras
from sklearn.preprocessing import MinMaxScaler

# Load MNIST dataset
(X_train, y_train), (X_test, y_test) = keras.datasets.mnist.load_data()

# Reshape and normalize data
X_train = X_train.reshape(-1, 28, 28, 1).astype('float32') / 255
X_test = X_test.reshape(-1, 28, 28, 1).astype('float32') / 255

# Define traffic simulation function
def simulate_traffic(num_cars, speed_limit, road_length):
    # Initialize traffic simulation
    traffic = np.zeros((road_length, num_cars))
    for i in range(num_cars):
        traffic[np.random.randint(0, road_length), i] = 1
    
    # Simulate traffic movement
    for t in range(100):
        new_traffic = np.zeros((road_length, num_cars))
        for i in range(num_cars):
            pos = np.where(traffic[:, i] == 1)[0][0]
            new_pos = (pos + np.random.randint(-1, 2)) % road_length
            new_traffic[new_pos, i] = 1
        traffic = new_traffic
    
    return traffic

# Simulate traffic patterns
num_cars = 10
speed_limit = 50
road_length = 100
traffic = simulate_traffic(num_cars, speed_limit, road_length)

# Visualize traffic patterns
plt.imshow(traffic, cmap='gray')
plt.xlabel('Road Length')
plt.ylabel('Time')
plt.title('Traffic Patterns')
plt.show()
